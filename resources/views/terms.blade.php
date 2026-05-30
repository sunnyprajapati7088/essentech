@extends('layouts.app')

@section('title', 'Terms & Conditions | EssenTechs – AC & Appliance Repair Services')

@section('meta_description', 'Read the Terms & Conditions of EssenTechs. Learn about our AC repair, refrigerator repair, washing machine repair, and appliance service policies in Delhi NCR.')

@section('meta_keywords', 'EssenTechs terms, AC repair terms, appliance service conditions, refrigerator repair policy, washing machine repair terms, Delhi NCR appliance service')

@section('content')
    <!-- Terms & Conditions Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                <h1 class="display-6">Terms & Conditions</h1>
                <p class="text-muted">Welcome to EssenTechs – your trusted partner for professional AC repair and home appliance services.</p>
            </div>

            <div class="wow fadeInUp" data-wow-delay="0.2s">
                <h4>1. Services Provided</h4>
                <p>
                    EssenTechs offers a wide range of home appliance services including <strong>AC repair, AC installation,
                    refrigerator repair, washing machine service, microwave repair, and regular maintenance contracts</strong>.
                    These Terms & Conditions apply to all customers booking services with us in Delhi, Gurgaon, Noida, and across NCR.
                </p>

                <h4>2. Booking & Cancellation Policy</h4>
                <p>
                    You can book a service through our website, WhatsApp, or by calling us directly. Bookings are subject to technician availability.
                    If you wish to cancel or reschedule, please inform us at least <strong>24 hours in advance</strong>.
                    Cancellations made later than this may incur a small fee to cover scheduling costs.
                </p>

                <h4>3. Pricing & Payment Terms</h4>
                <p>
                    All service charges are approximate and confirmed after on-site inspection. Any spare part replacement
                    or extra work will be discussed with you before proceeding. Payments must be made upon completion of the service.
                    We accept <strong>Cash, UPI, Bank Transfers, and major Digital Wallets</strong>.
                </p>

                <h4>4. Warranty & Limitations</h4>
                <p>
                    EssenTechs provides a limited service warranty of <strong>7 days on labor</strong> and <strong>manufacturer warranty on genuine spare parts</strong> (if applicable).
                    Warranty does not cover misuse, physical damage, or issues unrelated to the service provided.
                </p>

                <h4>5. Liability Disclaimer</h4>
                <p>
                    While our expert technicians take the utmost care, EssenTechs is not liable for any indirect or consequential damages,
                    loss of data, or financial loss caused by appliance failure. We also do not take responsibility for
                    pre-existing conditions or hidden defects in the appliance.
                </p>

                <h4>6. Annual Maintenance Contracts (AMC)</h4>
                <p>
                    Our AMCs cover periodic servicing of appliances like ACs and refrigerators.
                    Specific terms such as number of visits, inclusions, and exclusions will be provided at the time of signing the AMC.
                </p>

                <h4>7. Force Majeure</h4>
                <p>
                    We are not responsible for delays in service caused by events beyond our control,
                    including <strong>natural disasters, strikes, traffic disruptions, power failures, or emergencies</strong>.
                </p>

                <h4>8. Privacy & Customer Data</h4>
                <p>
                    We respect your privacy. Customer data such as name, contact details, and service address
                    will only be used to provide service updates and support. We do not sell or share customer information with third parties.
                    Please also review our <a href="{{ url('/privacy') }}">Privacy Policy</a> for more details.
                </p>

                <h4>9. Modifications to Terms</h4>
                <p>
                    EssenTechs may revise these Terms & Conditions from time to time.
                    The latest version will always be available on our website. Continued use of our services
                    means you accept the updated terms.
                </p>

                <h4>10. Governing Law & Contact</h4>
                <p>
                    These Terms & Conditions are governed by the laws of India. For service complaints, feedback,
                    or more information, you can reach us at:
                </p>
                <ul>
                    <li><strong>Phone/WhatsApp:</strong> +91-97467-00889</li>
                    <li><strong>Email:</strong> infoessentechs@gmail.com</li>
                    <li><strong>Website:</strong> <a href="https://www.essentechs.com">www.essentechs.com</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Terms & Conditions End -->
@endsection
