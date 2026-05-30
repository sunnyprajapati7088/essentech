<!-- Quote Start -->
<div class="container-fluid overflow-hidden my-5 px-lg-0">
    <div class="container quote px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 quote-text" data-parallax="scroll"
                data-image-src="{{ asset('img/carousel-1.jpg') }}">
                <div class="h-100 px-4 px-sm-5 ps-lg-0 wow fadeIn" data-wow-delay="0.1s">
                    <h1 class="text-white mb-4">For Individuals And Organisations</h1>
                    <p class="text-light mb-5">At EssenTechs, we’re committed to keeping your home and business running
                        smoothly. Whether you're a homeowner, office, school, or any organization — we've got your back
                        with fast, reliable, and affordable appliance repair services.</p>
                    <a href="" class="align-self-start btn btn-primary py-3 px-5">More Details</a>
                </div>
            </div>
            <div class="col-lg-6 quote-form" data-parallax="scroll"
                data-image-src="{{ asset('img/carousel-2.jpg') }}">
                <div class="h-100 px-4 px-sm-5 pe-lg-0 wow fadeIn" data-wow-delay="0.5s">
                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <div class="bg-white p-4 p-sm-5">
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" name="name" class="form-control" id="gname"
                                            placeholder="Enter Name" required>
                                        <label for="gname">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="email" name="email" class="form-control" id="gmail"
                                            placeholder="Enter Email" required>
                                        <label for="gmail">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" name="mobile" class="form-control" id="cname"
                                            placeholder="Enter Mobile" required>
                                        <label for="cname">Your Mobile</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating custom-floating">
                                        <select class="form-select" name="service" id="serviceType"
                                            aria-label="Service Type" required>
                                            <option selected disabled>Choose an Appliance</option>
                                            <option value="AC">Air Conditioner</option>
                                            <option value="Refrigerator">Refrigerator</option>
                                            <option value="Washing Machine">Washing Machine</option>
                                            <option value="Microwave">Microwave Oven</option>
                                            <option value="AC Repair EssenTechs In Cochin Call +919746700889">AC Repair
                                                EssenTechs In Cochin Call +919746700889</option>
                                            <option value="AC Repair EssenTechs In Ernakulam-Cochin">AC Repair
                                                EssenTechs In Ernakulam-Cochin</option>
                                            <option value="AC Repair EssenTechs In Kochi">AC Repair EssenTechs In Kochi
                                            </option>
                                            </option>
                                            <option value="AC Repair EssenTechs Near Me Call +919746700889">AC Repair
                                                EssenTechs Near Me Call +919746700889</option>
                                            <option value="AC Service EssenTechs In Ernakulam">AC Service EssenTechs In
                                                Ernakulam</option>
                                            <option value="AC Service EssenTechs In Kochi">AC Service EssenTechs In
                                                Kochi
                                            </option>
                                            <option value="AC Service EssenTechs Near Me">AC Service EssenTechs Near Me
                                            </option>
                                            <option value="Best AC Service Near Me EssenTechs">Best AC Service Near Me
                                                EssenTechs</option>
                                            <option value="Best Fridge Repair In Kochi EssenTechs">Best Fridge Repair
                                                In
                                                Kochi EssenTechs</option>
                                            <option value="Best Refrigerator Service In Kochi EssenTechs">Best
                                                Refrigerator
                                                Service In Kochi EssenTechs</option>
                                            <option value="Best Refrigerator Service Centre Near Me EssenTechs">Best
                                                Refrigerator Service Centre Near Me EssenTechs</option>
                                            <option value="Best Washing Machine Repair Service Near Me EssenTechs">Best
                                                Washing Machine Repair Service Near Me EssenTechs</option>
                                            <option value="Best Washing Machine Service In Kochi EssenTechs">Best
                                                Washing
                                                Machine Service In Kochi EssenTechs</option>
                                            <option value="Bosch Service Centre In Cochin EssenTechs">Bosch Service
                                                Centre
                                                In Cochin EssenTechs</option>
                                            <option value="Bosch Service Center Ernakulam EssenTechs">Bosch Service
                                                Center
                                                Ernakulam EssenTechs</option>
                                            <option value="Bosch Washing Machine Service Center Kochi EssenTechs">Bosch
                                                Washing Machine Service Center Kochi EssenTechs</option>
                                            <option value="Bosch Washing Machine Service Center Ernakulam">Bosch
                                                Washing
                                                Machine Service Center Ernakulam</option>
                                            <option value="Bosch Washing Machine Service Centre In Kochi EssenTechs">
                                                Bosch
                                                Washing Machine Service Centre In Kochi EssenTechs</option>
                                            <option value="Fridge Repair Near Me EssenTechs Call +919746700889">Fridge
                                                Repair Near Me EssenTechs Call +919746700889</option>
                                            <option value="Godrej Service Centre In Ernakulam-Cochin EssenTechs">Godrej
                                                Service Centre In Ernakulam-Cochin EssenTechs</option>
                                            <option value="Godrej Washing Machine Service Centre Ernakulam">Godrej
                                                Washing
                                                Machine Service Centre Ernakulam</option>
                                            <option value="Hitachi Service Centre In Ernakulam-Cochin EssenTechs">
                                                Hitachi
                                                Service Centre In Ernakulam-Cochin EssenTechs</option>
                                            <option value="Hitachi Service Center In Ernakulam EssenTechs">Hitachi
                                                Service
                                                Center In Ernakulam EssenTechs</option>
                                            <option value="Home Appliances Service Centre In Ernakulam EssenTechs">Home
                                                Appliances Service Centre In Ernakulam EssenTechs</option>
                                            <option value="IFB Service Centre In Ernakulam-Cochin EssenTechs">IFB
                                                Service
                                                Centre In Ernakulam-Cochin EssenTechs</option>
                                            <option value="IFB Service Centre In Ernakulam EssenTechs">IFB Service
                                                Centre
                                                In Ernakulam EssenTechs</option>
                                            <option value="IFB Washing Machine Service Centre In Cochin-Ernakulam">IFB
                                                Washing Machine Service Centre In Cochin-Ernakulam</option>
                                            <option value="IFB Washing Machine Service Centre Ernakulam EssenTechs">IFB
                                                Washing Machine Service Centre Ernakulam EssenTechs</option>
                                            <option value="IFB Washing Machine Service Ernakulam EssenTechs">IFB
                                                Washing
                                                Machine Service Ernakulam EssenTechs</option>
                                            <option value="LCD Tv Repair In Ernakulam EssenTechs">LCD Tv Repair In
                                                Ernakulam EssenTechs</option>
                                            <option value="LG Home Appliances Service Centre Call +919746700889">LG
                                                Home
                                                Appliances Service Centre Call +919746700889</option>
                                            <option value="LG Service Center In Ernakulam EssenTechs">LG Service Center
                                                In
                                                Ernakulam EssenTechs</option>
                                            <option value="LG Washing Machine Service Kochi EssenTechs">LG Washing
                                                Machine
                                                Service Kochi EssenTechs</option>
                                            <option value="LG Washing Machine Service Ernakulam EssenTechs">LG Washing
                                                Machine Service Ernakulam EssenTechs</option>
                                            <option value="LG Washing Machine Service Center Ernakulam EssenTechs">LG
                                                Washing Machine Service Center Ernakulam EssenTechs</option>
                                            <option value="LG Washing Machine Service Centre Ernakulam EssenTechs">LG
                                                Washing Machine Service Centre Ernakulam EssenTechs</option>
                                            <option value="Microwave Oven Repair EssenTechs In Ernakulam-Cochin">
                                                Microwave
                                                Oven Repair EssenTechs In Ernakulam-Cochin</option>
                                            <option value="Microwave Repair In Ernakulam-Cochin EssenTechs">Microwave
                                                Repair In Ernakulam-Cochin EssenTechs</option>
                                            <option value="Onida Washing Machine Service Centre Ernakulam">Onida
                                                Washing
                                                Machine Service Centre Ernakulam</option>
                                            <option value="Panasonic Service Centre In Ernakulam-Cochin EssenTechs">
                                                Panasonic Service Centre In Ernakulam-Cochin EssenTechs</option>
                                            <option
                                                value="Refrigerator Repair & Service EssenTechs In Ernakulam-Cochin">
                                                Refrigerator Repair & Service EssenTechs In Ernakulam-Cochin</option>
                                            <option value="Refrigerator Repair Near Me EssenTechs">Refrigerator Repair
                                                Near
                                                Me EssenTechs</option>
                                            <option value="Refrigerator Repair Service In Cochin EssenTechs">
                                                Refrigerator
                                                Repair Service In Cochin EssenTechs</option>
                                            <option value="Refrigerator Repair In Ernakulam-Cochin EssenTechs">
                                                Refrigerator
                                                Repair In Ernakulam-Cochin EssenTechs</option>
                                            <option value="Refrigerator Service In Ernakulam City EssenTechs">
                                                Refrigerator
                                                Service In Ernakulam City EssenTechs</option>
                                            <option value="Samsung AC Repair In Ernakulam-Cochin EssenTechs">Samsung AC
                                                Repair In Ernakulam-Cochin EssenTechs</option>
                                            <option value="Samsung Appliances Repair In Cochin EssenTechs">Samsung
                                                Appliances Repair In Cochin EssenTechs</option>
                                            <option value="Samsung Customer Care In Ernakulam EssenTechs">Samsung
                                                Customer
                                                Care In Ernakulam EssenTechs</option>
                                            <option value="Samsung Double Door Refrigerator Service Ernakulam">Samsung
                                                Double Door Refrigerator Service Ernakulam</option>
                                            <option value="Samsung Frost Free Refrigerator Service Ernakulam">Samsung
                                                Frost
                                                Free Refrigerator Service Ernakulam</option>
                                            <option value="Samsung Refrigerator Repair In Ernakulam-Cochin">Samsung
                                                Refrigerator Repair In Ernakulam-Cochin</option>
                                            <option value="Samsung Refrigerator Service Ernakulam EssenTechs">Samsung
                                                Refrigerator Service Ernakulam EssenTechs</option>
                                            <option value="Samsung Service Centre In Ernakulam-Cochin EssenTechs">
                                                Samsung
                                                Service Centre In Ernakulam-Cochin EssenTechs</option>
                                            <option value="Samsung Service Centre In Cochin EssenTechs">Samsung Service
                                                Centre In Cochin EssenTechs</option>
                                            <option value="Samsung Service Center Ernakulam EssenTechs">Samsung Service
                                                Center Ernakulam EssenTechs</option>
                                            <option value="Samsung Service Center In Ernakulam-Kochi EssenTechs">
                                                Samsung
                                                Service Center In Ernakulam-Kochi EssenTechs</option>
                                            <option value="Samsung Service Center Near Me EssenTechs">Samsung Service
                                                Center Near Me EssenTechs</option>
                                            <option value="Samsung Side By Side Refrigerator Service Ernakulam">Samsung
                                                Side By Side Refrigerator Service Ernakulam</option>
                                            <option
                                                value="Samsung Washing Machine Repair In Ernakulam-Cochin Call +919746700889">
                                                Samsung Washing Machine Repair In Ernakulam-Cochin Call +919746700889
                                            </option>
                                            <option value="Samsung Washing Machine Repair In Cochin EssenTechs">Samsung
                                                Washing Machine Repair In Cochin EssenTechs</option>
                                            <option value="Samsung Washing Machine Service Ernakulam EssenTechs">
                                                Samsung
                                                Washing Machine Service Ernakulam EssenTechs</option>
                                            <option value="Samsung Washing Machine Service Centre Ernakulam">Samsung
                                                Washing Machine Service Centre Ernakulam</option>
                                            <option value="Sharp Service Centre In Ernakulam-Cochin EssenTechs">Sharp
                                                Service Centre In Ernakulam-Cochin EssenTechs</option>
                                            <option value="Siemens Service Centre In Ernakulam-Cochin EssenTechs">
                                                Siemens
                                                Service Centre In Ernakulam-Cochin EssenTechs</option>
                                            <option value="Top Refrigerator Repair Service In Kochi EssenTechs">Top
                                                Refrigerator Repair Service In Kochi EssenTechs</option>
                                            <option value="Washing Machine Repair EssenTechs In Call +919746700889">
                                                Washing
                                                Machine Repair EssenTechs In Call +919746700889</option>
                                            <option value="Washing Machine Repair EssenTechs In Ernakulam-Cochin">
                                                Washing
                                                Machine Repair EssenTechs In Ernakulam-Cochin</option>
                                            <option value="Washing Machine Repair Near Me EssenTechs">Washing Machine
                                                Repair Near Me EssenTechs</option>
                                            <option value="Washing Machine Service EssenTechs In Ernakulam-Cochin">
                                                Washing
                                                Machine Service EssenTechs In Ernakulam-Cochin</option>
                                            <option value="Washing Machine Service EssenTechs In Kochi">Washing Machine
                                                Service EssenTechs In Kochi</option>
                                            <option value="Washing Machine Service Centre In Ernakulam EssenTechs">
                                                Washing
                                                Machine Service Centre In Ernakulam EssenTechs</option>
                                            <option value="Washing Machine Service Centre Near Me EssenTechs">Washing
                                                Machine Service Centre Near Me EssenTechs</option>
                                            <option value="Whirlpool Service Centre In Ernakulam-Cochin EssenTechs">
                                                Whirlpool Service Centre In Ernakulam-Cochin EssenTechs</option>
                                            <option value="Whirlpool Washing Machine Service Centre Ernakulam">
                                                Whirlpool
                                                Washing Machine Service Centre Ernakulam</option>
                                            <option value="Whirlpool Washing Machine Service Ernakulam EssenTechs">
                                                Whirlpool Washing Machine Service Ernakulam EssenTechs</option>
                                            <option value="Other">Other</option>
                                        </select>
                                        <label for="serviceType">Service Type</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" name="message" placeholder="Leave a message here" id="message"
                                            style="height: 80px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>

                                {{-- Optional hidden fields --}}
                                <input type="hidden" name="subject" value="Website Contact Form">
                                <input type="hidden" name="page" value="{{ url()->current() }}">

                                <div class="col-12">
                                    <button id="submitBtn" class="btn btn-primary py-3 px-5" type="submit">
                                        Get A Free Quote
                                    </button>
                                    <button id="loadingBtn" class="btn btn-primary py-3 px-5 d-none" type="button"
                                        disabled>
                                        <span class="spinner-border spinner-border-sm me-2"></span> Sending...
                                    </button>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Quote End -->