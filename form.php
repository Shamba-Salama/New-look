<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Ready Onboarding Quiz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script defer src="assets/js/script.js"></script>

    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow-y: scroll;

        }
        .container {
            max-width: 600px;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(99, 143, 17, 0.055);
        }

        .progress {
            height: 20px;
        }
        .hidden {
            display: none;

        }
    </style>
</head>
<body style="background: rgb(255,255,255);
      background: linear-gradient(73deg, rgba(255,255,255,1) 8%, rgba(29, 180, 44, 0.253) 87%);">
      


    <div class="container p-5 m-0">
        <h2 class="text-center text-dark mb-4">Salama Farm - Onboarding</h2>
        <hr class="my-4">
        <div class="progress mb-3">
            <div id="progress-bar" class="progress-bar "  role="progressbar" style="width: 0%; background-color: #71c55d;"></div>
        </div>
        
        <form id="quiz-form">
            <div class="quiz-section" id="section1">
                <h4>Personal Information</h4>

                <hr class="my-4">

                <div class="mb-3">
                    <label class="form-label">1. Enter your Name</label>
                    <input type="text" class="form-control" name="fname" placeholder="First Name">
                    <input type="text" class="form-control mt-2" name="lname" placeholder="Last Name">
                </div>


                <!-- email -->
                <div class="mb-3">
                    <label class="form-label">3. What is your Email?</label>
                    <input type="email" class="form-control mt-2" name="email" placeholder="email address">
                </div>

                <div class="mb-3">
                    <label class="form-label">2. What is your Phone Number?</label>
                    <input type="text" class="form-control" name="phone" class="phone" placeholder="+254...">
                </div>
            </div>


            <div class="quiz-section" id="section2">
                <h4>Farm Details</h4>
                <hr class="my-4">
                <div class="mb-3">
                    <label class="form-label">1. What is the size of your farm?</label>
                    <input type="text" class="form-control" name="farm_size" placeholder="Enter size in acres">
                </div>


                <div class="mb-3">
                    <label class="form-label mt-3">3. What type of crops do you grow?</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="crops" value="rice">
                        <label class="form-check-label">Rice</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="crops" value="wheat">
                        <label class="form-check-label">Wheat</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="crops" value="sorghum">
                        <label class="form-check-label">Sorghum</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="crops" value="maize">
                        <label class="form-check-label">Maize</label>
                    </div>
                </div>
            </div>

            <!-- location, live prompt user to allow location, then get exact google maps coodinates -->
            <div class="quiz-section" id="section3">
                <h4>Location</h4>

                <hr class="my-4">

                <div class="mb-3">
                    <label class="form-label">1. Where is your farm located?</label>
                    <input type="text" class="form-control" name="location" id="location-input" placeholder="Enter location">
                </div>
                <div class="mb-3">
                    <button type="button" class="btn btn-primary" id="get-location-btn">Use Current Location</button>
                </div>
            </div>
    
            <!-- Pests -->
            <div class="quiz-section hidden" id="section2">
                <h4>Type of Pests</h4>
                <div class="mb-3">
                    <label class="form-label">3. What type of pests do you encounter on your farm?</label>
                    <input list="pests" name="pest" class="form-control" placeholder="Select or type a pest">
                    <datalist id="pests">
                        <option value="Locusts">
                        <option value="Quelea Birds">
                        <option value="Armyworms">
                        <option value="Aphids">
                    </datalist>
                </div>
            </div>
            
            
            <div class="d-flex justify-content-between mt-4">
                <button type="button" class="btn btn-secondary" id="prev-btn" disabled>Previous</button>
                <button type="button" class="btn text-light" style="background-color: #71c55d;" id="next-btn">Next</button>
            </div>
            <button type="submit" class="btn  w-100 mt-3 hidden" style="background-color: #71c55d; color: #fff;" id="submit-btn">Submit Data</button>
        </form>
    </div>
    
</body>
</html>
