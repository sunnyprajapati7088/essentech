# Starts the local Laravel site, the MCP server in HTTP mode and an ngrok tunnel,
# then prints the URL to paste into any AI app (Claude.ai, ChatGPT, Cursor...).
# Needs mcp/essentechs-blog/.env.local (ESSENTECHS_API_URL, ESSENTECHS_API_TOKEN, MCP_ACCESS_KEY, MCP_HTTP_PORT).
$here = $PSScriptRoot
$root = Resolve-Path "$here\..\.."
$envFile = Join-Path $here ".env.local"
$key = ((Get-Content $envFile) | Where-Object { $_ -like "MCP_ACCESS_KEY=*" }) -replace '^MCP_ACCESS_KEY=', ''
$port = ((Get-Content $envFile) | Where-Object { $_ -like "MCP_HTTP_PORT=*" }) -replace '^MCP_HTTP_PORT=', ''
if (-not $port) { $port = 3333 }

Start-Process php -ArgumentList "artisan","serve","--host=127.0.0.1","--port=8000" -WorkingDirectory $root -WindowStyle Minimized
Start-Process node -ArgumentList "--env-file=.env.local","server.js","--http" -WorkingDirectory $here -WindowStyle Minimized
Start-Process ngrok -ArgumentList "http",$port -WindowStyle Minimized

$url = $null
for ($i = 0; $i -lt 20 -and -not $url; $i++) {
    Start-Sleep -Seconds 1
    try { $url = (Invoke-RestMethod http://127.0.0.1:4040/api/tunnels).tunnels[0].public_url } catch {}
}
if ($url) { Write-Host "`nMCP URL (keep it secret):`n$url/mcp/$key`n" -ForegroundColor Green }
else { Write-Host "ngrok did not start; check the ngrok window." -ForegroundColor Red }
