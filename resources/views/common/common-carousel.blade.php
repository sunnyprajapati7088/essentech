<div class="row align-items-center gy-4">

    <!-- Left Text -->
    <div class="col-lg-7 text-start banner-text text-white wow fadeIn" data-wow-delay="0.3s">
        <h1 class="display-4 mb-4">
            Your Comfort, Our Priority & Honesty
        </h1>
        <p class="fs-5 mb-4 pb-2">
            EssenTechs brings comfort back to your home with expert repair services for ACs, refrigerators, washing
            machines, and microwave ovens. Enjoy same-day service, transparent pricing, and 100% genuine parts across
            Ernakulam, Kakkanad, Edappally, and nearby areas.
        </p>
    </div>

    <!-- Right Form (same structure reused) -->
    <div class="col-lg-5 wow fadeIn" data-wow-delay="0.6s">
        <div class="form-box bg-white bg-opacity-75 rounded-4 shadow p-4 p-sm-5 text-start">
            <h3 class="mb-4 text-primary text-center">Book Service Near Me – Quick Response, Same-Day Repair for AC,
                Refrigerator,
                Washing Machine & Microwave.

            </h3>
            <form action="{{ route('contact.store') }}" method="POST">
                @csrf
                <div class="row g-3">
                    <div class="col-12">
                        <div class="form-floating">
                            <input type="text" name="name" class="form-control" id="gname2"
                                placeholder="Enter Name" required>

                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating">
                            <input type="email" name="email" class="form-control" id="gmail2"
                                placeholder="Enter Email" required>

                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating">
                            <input type="text" name="mobile" class="form-control" id="cname2"
                                placeholder="Enter Mobile" required>

                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating custom-floating">
                            <select class="form-select" name="service" id="serviceType2" required>
                                <option selected disabled>Choose an Appliance</option>
                                <option value="AC">Air Conditioner</option>
                                <option value="Refrigerator">Refrigerator</option>
                                <option value="Washing Machine">Washing Machine</option>
                                <option value="Microwave">Microwave Oven</option>
                                <option value="Other">Other</option>
                            </select>

                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating">
                            <textarea class="form-control" name="message" placeholder="Leave a message here" id="message2" style="height: 60px"></textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary py-3 w-100" type="submit">
                            Request Callback
                        </button>
                        <div style="margin-top:12px" class="small">
                            <span style="color: #000000;font-size:18px;font-weight:600">Or Call Directly: <a href="tel:+919746700889" class="phone">+91 97467 00889</a></span>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
