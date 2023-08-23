@extends('layouts.app')

@section('content')
    {{-- <div class="container">
        <div class="row">
            <div class="col-md-4">
                <!-- Profile Image -->
                <div class="profile-image">
                    <img style="width: 75px" src="{{ asset('image/gwapo1.jpg') }}" alt="" class="rounded-circle">
                </div>
            </div>
            <div class="col-md-8">
                <!-- Personal Information -->
                <div class="profile-section">
                    <h3>Personal Information</h3>
                    <ul>
                        <li><strong>First Name:</strong> John</li>
                        <li><strong>Last Name:</strong> Doe</li>
                        <li><strong>Email:</strong> john.doe@example.com</li>
                        <li><strong>Age:</strong> 30</li>
                        <li><strong>Birthdate:</strong> January 1, 1990</li>
                        <li><strong>Gender:</strong> Male</li>
                        <li><strong>Address:</strong> 123 Main St, City, State</li>
                        <li><strong>Phone Number:</strong> (123) 456-7890</li>
                        <li><strong>Occupation:</strong> Software Engineer</li>
                        <li><strong>Work Address:</strong> 456 Work St, City, State</li>
                    </ul>
                </div>

                <!-- Employment Information -->
                <div class="profile-section">
                    <h3>Employment Information</h3>
                    <ul>
                        <li><strong>Occupation:</strong> Software Engineer</li>
                        <li><strong>Work Address:</strong> 456 Work St, City, State</li>
                        <li><strong>Length of Employment:</strong> 2 years</li>
                        <li><strong>Monthly Income:</strong> $5000</li>
                    </ul>
                </div>

                <!-- Rental Information -->
                <div class="profile-section">
                    <h3>Rental Information</h3>
                    <ul>
                        <li><strong>Location:</strong> City, State</li>
                        <li><strong>Room Unit:</strong> 101</li>
                        <li><strong>Monthly Rent:</strong> $1000</li>
                        <li><strong>Rent Started:</strong> January 1, 2022</li>
                        <li><strong>Due Date:</strong> 5th of every month</li>
                        <li><strong>Rental Contract:</strong> <a href="path/to/rental-contract.pdf" download>Download</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div> --}}


    <div class="container">
        <div class="row" id="toprow">
            <img style="width: 250px" src="{{ asset('image/gwapo1.jpg') }}" alt=""
                class="rounded-circle mx-auto d-block">
            <div class="col-md-12">
                <div class="text-center" id="name">Barkha Makh</div>

                <div class="text-center">
                    <a href="">
                        <button class="btn btn-primary btn-lg" id="btn-hire">Hire Me</button></a>
                    <a href="https://codepen.io/sfbarkha/full/voXgJM"><button class="btn btn-primary btn-lg"
                            id="btn-pc">Profile Card</button></a>

                </div>
            </div>
        </div>
    </div>
    </div>
    <!------------------------------->

    <!----second container--------------------------->
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="card-deck">

                    <div class="card">
                        <div class="card-body" id="forhover">
                            <p class="card-text">
                            <h3 text-center>About Me</h3>
                            <hr>
                            <table class="table table-striped">
                                <tr>
                                    <td>Name</td>
                                    <td>Barkha Gupta</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>sf.barkha@gmail.com</td>
                                </tr>
                                <tr>
                                    <td>Phone Number</td>
                                    <td>608-338-3432</td>
                                </tr>
                                <tr>
                                    <td>Profession</td>
                                    <td>Web Design/Development</td>
                                </tr>
                            </table>
                            </p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <p class="card-text">
                            <h3 text-center>Skills</h3>
                            <hr>
                            <ul>
                                <li>HTML</li>
                                <li>CSS</li>
                                <li>Bootstrap 3/Bootstap 4</li>
                                <li>JavaScript</li>
                                <li>Software Testing</li>
                            </ul>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!--End of col-md-12--------->
        </div>
        <!------End of row container--->
    </div>
    <!------End of main container--->
    <!---------------------------------------------------------------------------------------------------->

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="card-deck">

                    <div class="card">
                        <div class="card-body" id="forhover">
                            <p class="card-text">
                            <h3 text-center>Education</h3>
                            <hr>
                            <ul>
                                <li>Bachelor in Computer Science(Mumbai University)</li>
                                <li>Master in Business Administration (HR)</li>
                                <li>Introduction to GIS(San Bernandino Valley College)</li>
                                <li>Diploma in Networked Centered Computing from NIIT.</li>
                            </ul>
                            </p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <p class="card-text">
                            <h3 text-center>Hobbies</h3>
                            <hr>
                            <ul>
                                <li>Watching Movies</li>
                                <li>Listening Music</li>
                                <li>Singing</li>
                                <li>Reading</li>
                                <li>Hanging out with Friends.</li>
                            </ul>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!--End of col-md-12--------->
        </div>
        <!------End of row container--->
    </div>
    <!------End of main container--->

    <!----Third container--------------------------->

    <!----container--------------------------->
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="card-deck">

                    <div class="card">
                        <div class="card-body">
                            <p class="card-text">
                            <h3 text-center>Experience</h3>
                            <hr>
                            <section>
                                <h5><u>State of OHIO(Columbus OH) 2009-2011</u></h5>
                                <h5><u>QA Analyst</u></h5>
                                <ul>
                                    <li>Developed Test Plans, Test Cases, Test Scripts and Test reports based on Requirement
                                        documents.</li>
                                    <li>Review user requirements documents to ensure that requirements are testable.</li>
                                    <li>Cretead custom SQL queries to extract necessary information for data validation.
                                    </li>
                                    <li>Prioritize testing tasks based on goals and risks of projects and ensure testing
                                        milestones, activities and tasks are completed as scheduled.</li>
                                    <li>Defect Tracking using Team Foundation Server(TFS).</li>
                                    <li>Preparing BUG Summary Reports</li>
                                </ul>

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <p class="card-text">
                                </section>
                                <hr>
                            <section>
                                <h5><u>Gharda Chemicals Ltd.(INDIA) 2005-2007</u></h5>
                                <h5><u>HR Admin</u></h5>
                                <ul>

                                    <li>Performing day to day admin activities.</li>
                                    <li> Assist in recruitment process </li>
                                    <li>Preparing new employee files and updating records in employee database.</li>
                                    <li>Orienting new employees to the organization (setting up designated login,
                                        workstation, email address) </li>
                                    <li>Preparation of ad hoc reports requested by stakeholders </li>
                                    <li>Completing termination formalities and assisting with exit interviews.</li>
                                </ul>
                            </section>





                        </div>
                    </div>
                </div>
            </div>
            <!--End of col-md-12--------->
        </div>
        <!------End of row container--->
    </div>
    <!------End of main container--->
@endsection
