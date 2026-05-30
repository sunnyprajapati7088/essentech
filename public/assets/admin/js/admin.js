// Admin Template JavaScript
document.addEventListener('DOMContentLoaded', function() {
    
    // Initialize all components
    initSidebar();
    initDataTables();
    initFormValidation();
    initTooltips();
    initConfirmDialogs();
    initSearchFunctionality();
    
    // Sidebar functionality
    function initSidebar() {
        const sidebar = document.getElementById('sidebar');
        const sidebarToggleBtn = document.getElementById('sidebarToggleBtn');
        const sidebarToggle = document.getElementById('sidebarToggle');
        const sidebarOverlay = document.getElementById('sidebarOverlay');
        
        // Mobile sidebar toggle
        if (sidebarToggleBtn) {
            sidebarToggleBtn.addEventListener('click', function() {
                sidebar.classList.add('show');
                sidebarOverlay.classList.add('show');
                document.body.style.overflow = 'hidden';
            });
        }
        
        // Close sidebar
        if (sidebarToggle) {
            sidebarToggle.addEventListener('click', function() {
                closeSidebar();
            });
        }
        
        // Close sidebar when clicking overlay
        if (sidebarOverlay) {
            sidebarOverlay.addEventListener('click', function() {
                closeSidebar();
            });
        }
        
        function closeSidebar() {
            sidebar.classList.remove('show');
            sidebarOverlay.classList.remove('show');
            document.body.style.overflow = '';
        }
        
        // Close sidebar on window resize if desktop
        window.addEventListener('resize', function() {
            if (window.innerWidth >= 992) {
                closeSidebar();
            }
        });
    }
    
    // Data table functionality
    function initDataTables() {
        const tables = document.querySelectorAll('.data-table');
        
        tables.forEach(table => {
            // Add sorting functionality
            const headers = table.querySelectorAll('th[data-sort]');
            headers.forEach(header => {
                header.style.cursor = 'pointer';
                header.addEventListener('click', function() {
                    sortTable(table, this.dataset.sort);
                });
            });
            
            // Add row selection
            const checkboxes = table.querySelectorAll('input[type="checkbox"]');
            const selectAllCheckbox = table.querySelector('#selectAll');
            
            if (selectAllCheckbox) {
                selectAllCheckbox.addEventListener('change', function() {
                    checkboxes.forEach(checkbox => {
                        if (checkbox !== selectAllCheckbox) {
                            checkbox.checked = this.checked;
                        }
                    });
                    updateSelectedCount();
                });
            }
            
            checkboxes.forEach(checkbox => {
                if (checkbox.id !== 'selectAll') {
                    checkbox.addEventListener('change', updateSelectedCount);
                }
            });
        });
    }
    
    // Table sorting function
    function sortTable(table, column) {
        const tbody = table.querySelector('tbody');
        const rows = Array.from(tbody.querySelectorAll('tr'));
        const columnIndex = Array.from(table.querySelectorAll('th')).findIndex(th => th.dataset.sort === column);
        
        if (columnIndex === -1) return;
        
        const isAscending = !table.dataset.sortDirection || table.dataset.sortDirection === 'desc';
        table.dataset.sortDirection = isAscending ? 'asc' : 'desc';
        
        rows.sort((a, b) => {
            const aValue = a.cells[columnIndex].textContent.trim();
            const bValue = b.cells[columnIndex].textContent.trim();
            
            // Try to parse as numbers
            const aNum = parseFloat(aValue);
            const bNum = parseFloat(bValue);
            
            if (!isNaN(aNum) && !isNaN(bNum)) {
                return isAscending ? aNum - bNum : bNum - aNum;
            }
            
            // Sort as strings
            return isAscending ? aValue.localeCompare(bValue) : bValue.localeCompare(aValue);
        });
        
        // Clear and re-append sorted rows
        tbody.innerHTML = '';
        rows.forEach(row => tbody.appendChild(row));
        
        // Update sort indicators
        table.querySelectorAll('th').forEach(th => {
            th.classList.remove('sort-asc', 'sort-desc');
        });
        
        const currentHeader = table.querySelector(`th[data-sort="${column}"]`);
        currentHeader.classList.add(isAscending ? 'sort-asc' : 'sort-desc');
    }
    
    // Update selected count
    function updateSelectedCount() {
        const selectedCheckboxes = document.querySelectorAll('input[type="checkbox"]:checked:not(#selectAll)');
        const countElement = document.getElementById('selectedCount');
        const bulkActions = document.getElementById('bulkActions');
        
        if (countElement) {
            countElement.textContent = selectedCheckboxes.length;
        }
        
        if (bulkActions) {
            bulkActions.style.display = selectedCheckboxes.length > 0 ? 'block' : 'none';
        }
    }
    
    // Form validation
    function initFormValidation() {
        const forms = document.querySelectorAll('.needs-validation');
        
        forms.forEach(form => {
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            });
            
            // Real-time validation
            const inputs = form.querySelectorAll('input, select, textarea');
            inputs.forEach(input => {
                input.addEventListener('blur', function() {
                    if (this.checkValidity()) {
                        this.classList.remove('is-invalid');
                        this.classList.add('is-valid');
                    } else {
                        this.classList.remove('is-valid');
                        this.classList.add('is-invalid');
                    }
                });
            });
        });
    }
    
    // Initialize tooltips
    function initTooltips() {
        const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
    }
    
    // Confirm dialogs
    function initConfirmDialogs() {
        const deleteButtons = document.querySelectorAll('[data-confirm]');
        
        deleteButtons.forEach(button => {
            button.addEventListener('click', function(event) {
                const message = this.dataset.confirm || 'Are you sure you want to delete this item?';
                if (!confirm(message)) {
                    event.preventDefault();
                }
            });
        });
    }
    
    // Search functionality
    function initSearchFunctionality() {
        const searchInputs = document.querySelectorAll('.table-search');
        
        searchInputs.forEach(input => {
            const tableId = input.dataset.table;
            const table = document.getElementById(tableId);
            
            if (table) {
                input.addEventListener('input', function() {
                    filterTable(table, this.value);
                });
            }
        });
    }
    
    // Filter table rows
    function filterTable(table, searchTerm) {
        const rows = table.querySelectorAll('tbody tr');
        const term = searchTerm.toLowerCase();
        
        rows.forEach(row => {
            const text = row.textContent.toLowerCase();
            row.style.display = text.includes(term) ? '' : 'none';
        });
    }
    
    // Utility functions
    window.AdminUtils = {
        // Show toast notification
        showToast: function(message, type = 'success') {
            const toastContainer = document.getElementById('toastContainer') || this.createToastContainer();
            const toast = this.createToast(message, type);
            toastContainer.appendChild(toast);
            
            const bsToast = new bootstrap.Toast(toast);
            bsToast.show();
            
            // Remove toast after it's hidden
            toast.addEventListener('hidden.bs.toast', function() {
                toast.remove();
            });
        },
        
        createToastContainer: function() {
            const container = document.createElement('div');
            container.id = 'toastContainer';
            container.className = 'toast-container position-fixed top-0 end-0 p-3';
            container.style.zIndex = '1055';
            document.body.appendChild(container);
            return container;
        },
        
        createToast: function(message, type) {
            const toast = document.createElement('div');
            toast.className = 'toast';
            toast.setAttribute('role', 'alert');
            
            const iconMap = {
                success: 'bi-check-circle-fill text-success',
                error: 'bi-exclamation-triangle-fill text-danger',
                warning: 'bi-exclamation-triangle-fill text-warning',
                info: 'bi-info-circle-fill text-info'
            };
            
            toast.innerHTML = `
                <div class="toast-header">
                    <i class="bi ${iconMap[type] || iconMap.info} me-2"></i>
                    <strong class="me-auto">Notification</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast"></button>
                </div>
                <div class="toast-body">
                    ${message}
                </div>
            `;
            
            return toast;
        },
        
        // Loading state
        setLoading: function(element, loading = true) {
            if (loading) {
                element.disabled = true;
                element.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Loading...';
            } else {
                element.disabled = false;
                element.innerHTML = element.dataset.originalText || 'Submit';
            }
        },
        
        // Format numbers
        formatNumber: function(num) {
            return new Intl.NumberFormat().format(num);
        },
        
        // Format currency
        formatCurrency: function(amount, currency = 'USD') {
            return new Intl.NumberFormat('en-US', {
                style: 'currency',
                currency: currency
            }).format(amount);
        },
        
        // Debounce function
        debounce: function(func, wait) {
            let timeout;
            return function executedFunction(...args) {
                const later = () => {
                    clearTimeout(timeout);
                    func(...args);
                };
                clearTimeout(timeout);
                timeout = setTimeout(later, wait);
            };
        }
    };
    
    // Auto-hide alerts
    const alerts = document.querySelectorAll('.alert:not(.alert-permanent)');
    alerts.forEach(alert => {
        setTimeout(() => {
            const bsAlert = new bootstrap.Alert(alert);
            bsAlert.close();
        }, 5000);
    });
    
    // Add loading states to forms
    const submitButtons = document.querySelectorAll('form button[type="submit"]');
    submitButtons.forEach(button => {
        button.dataset.originalText = button.innerHTML;
        button.closest('form').addEventListener('submit', function() {
            AdminUtils.setLoading(button, true);
        });
    });
    
    // Initialize page-specific functionality
    const page = document.body.dataset.page;
    if (page && window[`init${page}Page`]) {
        window[`init${page}Page`]();
    }
});

// Page-specific initialization functions
window.initDashboardPage = function() {
    // Dashboard-specific functionality
    console.log('Dashboard page initialized');
};

window.initFormsPage = function() {
    // Forms page-specific functionality
    console.log('Forms page initialized');
};

window.initTablesPage = function() {
    // Tables page-specific functionality
    console.log('Tables page initialized');
};