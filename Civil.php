<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Department of CIVIL</title>
    <!-- bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- font  -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />

    <!-- font awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
      integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <!-- owl carousel -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    />

    <!-- aos -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <!-- custom css -->
    <link rel="stylesheet" href="assets/scss/style.css" />
    <!-- script js -->
<style>
  .title {
  font-size: 2rem;
  color: #333;
  margin-bottom: 30px;
}

.gallery {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 20px;
  padding: 10px;
  max-width: 1200px;
  margin: auto;
}

.gallery img {
  width: 100%;
  height: 200px; /* Fixed height */
  object-fit: cover; /* Ensures image fills the box without distortion */
  border-radius: 10px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  cursor: pointer;
}

.gallery img:hover {
  transform: scale(1.03);
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

</style>
  </head>

  <body>
    <!-- header section -->
    <header class="header" data-aos="flipdown" data-aos-duration="2000">
      <div class="top-header">
        <div class="header_logo-wrapper">
          <img
            class="sitlogo-png"
            src="./assets/img/home/sitlogo.png"
            alt="logo"
          />
        </div>
      </div>
      <div class="primary-header">
        <div class="container">
          <div class="main-header navbar navbar-expand-lg">
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapsibleNavbar"
            >
              <svg
                class="ham hamRotate ham1"
                viewBox="0 0 100 100"
                width="50"
                onclick="this.classList.toggle('active')"
              >
                <path
                  class="line top"
                  d="m 30,33 h 40 c 0,0 9.044436,-0.654587 9.044436,-8.508902 0,-7.854315 -8.024349,-11.958003 -14.89975,-10.85914 -6.875401,1.098863 -13.637059,4.171617 -13.637059,16.368042 v 40"
                />
                <path class="line middle" d="m 30,50 h 40" />
                <path
                  class="line bottom"
                  d="m 30,67 h 40 c 12.796276,0 15.357889,-11.717785 15.357889,-26.851538 0,-15.133752 -4.786586,-27.274118 -16.667516,-27.274118 -11.88093,0 -18.499247,6.994427 -18.435284,17.125656 l 0.252538,40"
                />
              </svg>
            </button>
            <ul
              id="collapsibleNavbar"
              class="navbar-nav navbar-collapse collapse"
            >
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
                <div class="admission-dropdown">
                  <a
                    href="history.php"
                    class="admission-dropdown-list"
                  >
                    <div class="admission-dropdown_container">History</div>
                  </a>
                  <a href="management.php" class="admission-dropdown-list">
                    <div class="admission-dropdown_container">Management</div>
                  </a>
                  <a href="chairman.php" class="admission-dropdown-list">
                    <div class="admission-dropdown_container">Chairman</div>
                  </a>
                  <a
                    href="secretary.php"
                    class="admission-dropdown-list"
                  >
                    <div class="admission-dropdown_container">Secretary</div>
                  </a>
                  <a href="principal.php" class="admission-dropdown-list">
                    <div class="admission-dropdown_container">Principal</div>
                  </a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link admission-nav" href="#">Admission</a>
                <div class="admission-dropdown">
                  <a
                    href="Course-off.php"
                    class="admission-dropdown-list"
                  >
                    <div class="admission-dropdown_container">
                      Courses Offered
                    </div>
                  </a>
                  <a
                    href="Eligibility.php"
                    class="admission-dropdown-list"
                  >
                    <div class="admission-dropdown_container">
                      Admission Procedure
                    </div>
                  </a>
                  <a
                    href="./brochure.php"
                    class="admission-dropdown-list"
                  >
                    <div class="admission-dropdown_container">Brochure</div>
                  </a>
              
                  <a
                    href="Fee_Structure.php"
                    class="admission-dropdown-list"
                  >
                    <div class="admission-dropdown_container">Fee Structure</div>
                  </a>
                 
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Departments</a>
                <div class="admission-dropdown">
                  <a
                    href="Civil.php"
                    class="admission-dropdown-list"
                  >
                    <div class="admission-dropdown_container">
                      Civil Engineering
                    </div>
                  </a>
                  <a
                    href="EEE.php"
                    class="admission-dropdown-list"
                  >
                    <div class="admission-dropdown_container">
                      Electrical & Electronics Engineering
                    </div>
                  </a>
                  <a
                    href="Mechanical.php"
                    class="admission-dropdown-list"
                  >
                    <div class="admission-dropdown_container">
                      Mechanical Engineering
                    </div>
                  </a>
                  <a
                    href="Computer.php"
                    class="admission-dropdown-list"
                  >
                    <div class="admission-dropdown_container">
                      Computer Engineering
                    </div>
                  </a>
                  <a
                    href="Instrumentation.php"
                    class="admission-dropdown-list"
                  >
                    <div class="admission-dropdown_container">
                      Instrumentation & Control Engineering
                    </div>
                  </a>
                  <a
                    href="Paper.php"
                    class="admission-dropdown-list"
                  >
                    <div class="admission-dropdown_container">
                      Paper technology
                    </div>
                  </a>
                  <a
                    href="chemical.php"
                    class="admission-dropdown-list"
                  >
                    <div class="admission-dropdown_container">
                      Chemical Engineering
                    </div>
                  </a>
                  <a
                    href="#"
                    class="admission-dropdown-list"
                  >
                    <div class="admission-dropdown_container">
                      Science & humanities
                    </div>
                  </a>
                </div>
              </li>
              <li class="nav-item">
                <a href="committee.php" class="nav-link">Committee</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Facilities</a>
                <div class="admission-dropdown">
                  <a
                    href="library.php"
                    class="admission-dropdown-list"
                  >
                    <div class="admission-dropdown_container">Library</div>
                  </a>
                  <a
                    href="hostel.php"
                    class="admission-dropdown-list"
                  >
                    <div class="admission-dropdown_container">Hostel</div>
                  </a>
                  <a
                    href="canteen.php"
                    class="admission-dropdown-list"
                  >
                    <div class="admission-dropdown_container">Canteen</div>
                  </a>
                  <a
                    href="ncc.php"
                    class="admission-dropdown-list"
                  >
                    <div class="admission-dropdown_container">
                      National Cadet Corps(NCC)
                    </div>
                  </a>
                  <a
                    href="nss.php"
                    class="admission-dropdown-list"
                  >
                    <div class="admission-dropdown_container">
                      National Service Scheme(NSS)
                    </div>
                  </a>
                  <a
                    href="./yrc.php"
                    class="admission-dropdown-list"
                  >
                    <div class="admission-dropdown_container">
                      Youth Red Cross
                    </div>
                  </a>
                  <a
                    href="sports.php"
                    class="admission-dropdown-list"
                  >
                    <div class="admission-dropdown_container">
                      Sports Facilities
                    </div>
                  </a>
                  <a
                    href="club.php"
                    class="admission-dropdown-list"
                  >
                    <div class="admission-dropdown_container">
                      Students Association & Clubs
                    </div>
                  </a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./accreditation.php">Accreditation</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Placement</a>
                <div class="admission-dropdown">
                  <a
                    href="placement-cell.php"
                    class="admission-dropdown-list"
                  >
                    <div class="admission-dropdown_container">
                      PLacement Cell
                    </div>
                  </a>                  
                  <a
                    href="our-recruiters.php"
                    class="admission-dropdown-list"
                  >
                    <div class="admission-dropdown_container">
                      Our Recruiters
                    </div>
                  </a>                  
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="exams.php">Exams</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">HelpDesk</a>
                <div class="admission-dropdown">
                  <a
                    href="#"
                    class="admission-dropdown-list"
                  >
                    <div class="admission-dropdown_container">
                      Enquiry Entry
                    </div>
                  </a>
                  <a
                    href="#"
                    class="admission-dropdown-list"
                  >
                    <div class="admission-dropdown_container">
                      Edit/Update Enquiry
                    </div>
                  </a>
                  <a
                    href="#"
                    class="admission-dropdown-list"
                  >
                    <div class="admission-dropdown_container">
                      Enquiry Report
                    </div>
                  </a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </header>    <!-- header section //-->

    <div class="department-container">
      <div class="department-sidebar">
        <a
          href="Civil.php#"
          id="department-home-side"
          onclick="showSection(this,'department-section');"
          class="department-active"
          >Department of Civil</a
        >
        <a
          href="Civil.php#"
          onclick="showSection(this,'vision-container')"
          id="department-academic"
          >Vision & Mission</a
        >
        <a href="Civil.php#" onclick="toggleDropdown()">Faculty Details</a>
        <div id="department-faculty-dropdown" class="department-dropdown">
          <a
            href="Civil.php#"
            onclick="showSection(this,'parent-faculty'); return false;"
            style="background-color: white; color: black; width: 100%"
          >
            Faculty Profile
          </a>
        </div>
        <a href="Civil.php#" onclick="showSection(this,'syllabus')" 
          >Curriculam & Syllabus</a
        >
        <a href="Civil.php#" onclick="showSection(this,'ppp')" 
          >PEOs,POs and PSOs</a
        >
        <a href="Civil.php#" onclick="showSection(this,'lab-facilities')"
          >Lab Facilities</a
        >
        <a href="Civil.php#" onclick="showSection(this,'placement')"
          >Placement</a
        >
        <a href="Civil.php#" onclick="showSection(this,'rankholders')"
          >Rank Holders</a
        >
        <a href="Civil.php#" onclick="showSection(this,'studentsachievement')"
          >Student Achievements</a
        >
        <a href="Civil.php#" onclick="showSection(this,'PAC')"
          >Program Advisory Committee</a
        >
        <a href="Civil.php#" onclick="showSection(this,'mou')"
          >MoU Signed</a
        >
        <a href="http://www.sitalumni.in/sitaavoice.html" target="_new"
          >Newsletter</a
        >
      </div>
      <div class="department-content">
        <div class="department-header">Department of Civil Engineering</div>
        <div class="department-active" id="department-section">
          <h2>About the Department</h2>
         <p style="text-align:justify"> The Department of Civil engineering was established in the year 1952 and  a pioneering department occupies a unique position in the field of technical education in the Institution. This department made a humble beginning by conducting A.M.I.E. Classes. Many Arts and Science Graduates availed to become engineers.

With very good infrastructure like massive workshop, laboratories and Computer Integrated Manufacturing lab with dedicated workstations, the department has grown by leaps and bounds into a prestigious department and attained the Autonomous status in the year 1994-95. The department also received ISO certification for its quality and achieved another milestone of accreditation with NBA in the ear 2024. The backbone of the department being highly qualified faculty and a strong alumni support for the department.
The department has its Own Academic Board and Awards Committee to guide the academic activities.

</p>
        </div>

        <!-- HOD Section -->

        <!-- Parent Faculty -->

        <div id="parent-faculty" style="display: none">
          <h2 class="computer-faculty-title" style="margin-top: 20px">
            Faculty Profile
          </h2>
          <div
            id="computer-department-faculty"
            class="computer-department-section"
            style="margin-top: 50px"
          >
            <div class="computer-faculty-container">
              <div class="computer-faculty-image">
                <img
                  src="assets/Department/Civil/Staff_photo/hod.jpg"
                  alt="Faculty Image" 
                />
              </div>
              <div class="computer-faculty-details">
                <h2 class="computer-faculty-name">
                R.RAJASEKARAN
                </h2>
                <h3 class="computer-faculty-position">
                  Head of the Department (i/c)
                </h3>
                <div style="display: flex; gap: 10px">
                  <p class="computer-faculty-email">
                    sitcivildepartment@gmail.com
                  </p>
                  <p>
                    <strong>Mobile:</strong>
                    <span class="computer-faculty-id">9443399091</span>
                  </p>
                </div>
                <p class="computer-faculty-description">
                Mr. R. Rajasekaran currently serves as the Head of the Department (HoD) in charge of Civil Engineering at Seshasayee Institute of Technology. He commenced his career at the institution in 1995 as a Lecturer in Civil Engineering. Over the years, he has been promoted to Senior Lecturer in 2005 and to Lecturer (Selection Grade) in 2019.
                In his tenure, Mr. Rajasekaran has significantly contributed to the development of the campus infrastructure. He served as the Engineer-in-Charge for the construction of the Diamond Jubilee Building and the World Bank-assisted project for the modernization and construction of new course buildings. His leadership in these projects has been instrumental in enhancing the institution's facilities.
                Mr. Rajasekaran holds an AMIE degree from The Institution of Engineers (India) and a Master of Engineering degree in Structural Engineering from the Regional Engineering College (now NIT), Tiruchirappalli. He has published six research papers in leading technical journals, contributing to the advancement of knowledge in his field.
In recognition of his dedication and excellence in teaching, he was honored with the 'Best Faculty' award by Nehru College of Engineering, Coimbatore.

                </p>
                <p class="computer-faculty-description">
                </p>
                <p class="computer-faculty-description">
                </p>
                <p>
                  <strong>AICTE ID:</strong>
                  <span class="computer-faculty-id">1-477942171</span>
                </p>
              </div>
            </div>
          </div>
          <!-- HOD Section //-->

          <!-- Teaching Staff Section -->

          <div id="teaching-staff-section" class="teaching-staff-container">
            <h2 class="teaching-staff-title" >Teaching Staff</h2>

            <div class="teaching-staff-grid" >
              <div class="teaching-staff-box">
                <div class="teaching-staff-image">
                  <img
                    src="assets/Department/Civil/Staff_photo/staff1.jpg"
                    alt="Teaching Staff Image"
                  />
                </div>
                <div class="teaching-staff-details">
                                   <h2 class="teaching-staff-name">Dr.M.SUDHAKAR.M.E,Ph.D</h2>
                  <h3 class="teaching-staff-position">Lecturer(S.G)</h3>
                  <p>
                    <strong>AICTE ID:</strong>
                    <span class="computer-faculty-id">1-448187999</span>
                  </p>
                  
                  <a href="./assets/Department/Civil/Staff_Profile/sudhakarprofile.pdf" target="_blank">
  <button class="view-profile-btn" style="width:255px;">View Profile</button>
</a>
                </div>
              </div>

              <div class="teaching-staff-box">
                <div class="teaching-staff-image" >
                  <img
                    src="assets/Department/Civil/Staff_photo/staff2.jpg"
                    alt="Teaching Staff Image"
                  />
                </div>
                <div class="teaching-staff-details">
                                    <h2 class="teaching-staff-name">R.KRISHNAN,D.C.E</h2>
                   <h3 class="teaching-staff-position">J.D.O</h3>
                                                   </div>
              </div>
              <div class="teaching-staff-box">
                <div class="teaching-staff-image">
                  <img
                    src="assets/Department/Civil/Staff_photo/staff3.jpg"
                    alt="Teaching Staff Image"
                  />
                </div>
                <div class="teaching-staff-details">
                  
                  <h2 class="teaching-staff-name">K.M.KANCHANA,B.E</h2>
                  <h3 class="teaching-staff-position">Lecturer</h3>
                  <p>
                    <strong>AICTE ID:</strong>
                    <span class="computer-faculty-id">1-11305637555</span>
                  </p>
                  
                  <a href="./assets/Department/Civil/Staff_Profile/kanchanaprofile.pdf" target="_blank">
  <button class="view-profile-btn" style="width:255px;">View Profile</button>
</a>
                </div>
              </div>
            </div>
</div>

          <div id="teaching-staff-section" class="teaching-staff-container">
       

            <div class="teaching-staff-grid">
              <div class="teaching-staff-box">
                <div class="teaching-staff-image">
                  <img
                    src="assets/Department/Civil/Staff_photo/staff4.jpg"
                    alt="Teaching Staff Image"
                  />
                </div>
                <div class="teaching-staff-details">
                  
                  <h2 class="teaching-staff-name">V.AKILANDESHWARI,M.E</h2>
                  <h3 class="teaching-staff-position">Lecturer</h3>
                  <p>
                    <strong>AICTE ID:</strong>
                    <span class="computer-faculty-id">1-448187999</span>
                  </p>
                                     <a href="./assets/Department/Civil/Staff_Profile/akilandeswariprofile.pdf" target="_blank">
                  <button class="view-profile-btn">View Profile</button>
                  
</a>
                </div>
              </div>

              <div class="teaching-staff-box">
                <div class="teaching-staff-image">
                  <img
                    src="assets/Department/Civil/Staff_photo/staff5.jpg"
                    alt="Teaching Staff Image"
                  />
                </div>
                <div class="teaching-staff-details">
                                   <h2 class="teaching-staff-name">S.KARTHIKA,B.E</h2>
                                   <h3 class="teaching-staff-position">Lecturer</h3>
                  <p>
                    <strong>AICTE ID:</strong>
                    <span class="computer-faculty-id">1-448187999</span>
                  </p>
                                    <a href="./assets/Department/Civil/Staff_Profile/karthikaprofile.pdf" target="_blank">
  <button class="view-profile-btn" style="width:255px;">View Profile</button>
</a>
                </div>
              </div>
              <div class="teaching-staff-box">
                <div class="teaching-staff-image">
                  <img
                    src="assets/Department/Civil/Staff_photo/staff6.jpg"
                    alt="Teaching Staff Image" 
                  />
                </div>
                <div class="teaching-staff-details">
                                    <h2 class="teaching-staff-name">J.PAVITHRA,M.E</h2>
                                    <h3 class="teaching-staff-position">Lecturer</h3>
                  <p>
                    <strong>AICTE ID:</strong>
                    <span class="computer-faculty-id">1-448187999</span>
                  </p>
                                    <a href="./assets/Department/Civil/Staff_Profile/pavithraprofile.pdf" target="_blank">
  <button class="view-profile-btn" style="width:255px;">View Profile</button>
</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Lab Assistant Section -->


          <div id="assistant-staff-section" class="teaching-staff-container">
<h2 class="teaching-staff-title">Lab Assistant</h2>

  <div class="teaching-staff-grid">
    <div class="teaching-staff-box">
      <div class="teaching-staff-image">
        <img
          src="assets/Department/Civil/Staff_photo/SRINI.jpg"
          alt="Lab Assistant Image"
        />
      </div>
      <div class="teaching-staff-details">
       
        <h2 class="teaching-staff-name">P.SRINIVASAN.D.C.E</h2>
         <h3 class="teaching-staff-position">LABORATORY ASSISTANT</h3>
                       
      </div>
    </div>
  </div>
</div>

<!-- Lab Assistant Section //-->

           
        </div>
        <!-- Parent faculty // -->
<!-- Syllabus  -->
<div id="syllabus" style="display: none;animation: fadeIn 1.2s ease-in-out;">
  <div class="syllabus-title">Curriculum and Syllabus</div>
  
  <div class="syllabus-list" style="display: flex; flex-direction: row; gap: 20px; flex-wrap: wrap; align-items: flex-start;">
    <div class="syllabus-card" data-aos="fade-up" style="width: 200px;">
      <a
        href="./assets/Department/Civil/Curriculam&Syllabus/E-SCHEME.pdf"
        class="download-btn"
        target="_blank"
        ><i class="fa fa-download"></i>E-Syllabus</a>
    </div>
    
    <div class="syllabus-card" data-aos="fade-up" style="width: 200px;">
      <a
        href="./assets/Department/Civil/Curriculam&Syllabus/F SCHEME.pdf"
        class="download-btn"
        target="_blank"
        ><i class="fa fa-download"></i>F-Syllabus</a>
    </div>
    
    <div class="syllabus-card" data-aos="fade-up" style="width: 200px;">
      <a
        href="./assets/Department/Civil/Curriculam&Syllabus/g-scheme.pdf"
        class="download-btn"
        target="_blank"
        ><i class="fa fa-download"></i>G-Syllabus</a>
    </div>
  </div>
</div>
<!-- Syllabus //-->


      <!-- vision -->
      <div class="vision-safe">
        <div id="vision-container">
          <h1 class="vision-title">Vision</h1>
          <p class="vision-text" style="text-align: justify;">
          To impart knowledge and excellence that brings out civil engineers with high technical competencies and promotes professional assignments to meet the current and future challenges in civil engineering.
          <h2 class="mission-title">Mission</h2>
          <ul class="mission-list" style="text-align: justify;animation: fadeIn 1.2s ease-in-out; ">
          <li>
  To promote activities that cultivate the spirit of entrepreneurship among students.
</li>
<li>
  To impart quality education with moral values in emerging areas of employability skills.
</li>
<li>
  To create, disseminate, and integrate knowledge of engineering, science, and technology that expands the civil and environmental engineering knowledge base, enabling the betterment of human society.
</li>
<li>
  To enrich and enhance the knowledge base of best practices in various areas of Civil and allied Engineering.
</li>
<li>
  To create competent professionals trained in the design and development of civil engineering systems who can contribute to meeting industry requirements.
</li>

          </ul>
        </div>
      </div>
      <!-- vision //-->

      <!-- PAC Section-->
  
      <div id="PAC" style="animation: fadeIn 1.2s ease-in-out;"">
      <div class="syllabus-title">Program Advisory Committee</div>
        <button onclick="showPDF()">📄 View PAC Letter</button>
        <iframe id="pdfContainer" src="./assets/documents/Admission/mech/pac.pdf"></iframe>
    </div>

      <!-- PAC Section // -->
         <!-- PEO and PSO  -->
         <div id="ppp" style="display: none;animation: fadeIn 1.2s ease-in-out;">
        <div class="peo-container">
          <h2 class="peo-h2">Program Educational Objectives (PEOs)</h2>
          <div class="peo-section">
            <h3>PEOs</h3>
            <ul><li>
  1️⃣ Function effectively as civil engineering professionals in industry, government, or other organizations by designing, improving, leading, and implementing efficient civil engineering practices.
</li>
<li>
  2️⃣ Inculcate professional and ethical attitudes, effective communication skills, and teamwork among students to help them become successful entrepreneurs.
</li>
<li>
  3️⃣ Promote lifelong self-learning abilities through projects and industrial training to gain multidisciplinary knowledge that meets societal needs.
</li>

            </ul>
          </div>
        </div>

        <div class="po-container">
          <h2 class="peo-h2">Program Outcomes (POs)</h2>
          <div class="po-section">
            <h3>POs</h3>
            <ul>
              <li>
                📌 <b>Basic and Discipline-specific knowledge:</b>
                Apply knowledge of basic mathematics, science and engineering fundamentals and engineering  specialization to solve the engineering problems.
              </li>
              <li>
                📌 <b>Problem analysis:</b> Identify and analyse well-defined engineering problems using codified standard methods.
              </li>
              <li>
                📌 <b>Design/Development of solutions:</b>  Design solutions for well-defined technical problems and assist with the design of systems components or processes to meet specified needs.
              </li>
              <li>
                📌 <b>Engineering Tools, Experimentation & Testing:</b> Apply modern engineering   tools and appropriate technique to conduct standard tests and  measurements.
              </li>
              <li>
                📌
                <b
                  >Engineering practices for society, sustainability &
                  environment:</b
                >
                Apply appropriate technology in context of society, sustainability, environment and ethical  
      practices.

              </li>
              <li>
                📌 <b>Project Management:</b>Use engineering management principles individually, as a Team  member or a leader to manage  
      projects and effectively communicate about well-defined  engineering activities.

              </li>
              <li>
                📌 <b>Life-long learning:</b> Ability to analyze individual needs and engage in updating in the context of technological changes.
              </li>
            </ul>
          </div>
        </div>

        <div class="pso-container">
          <h2 class="peo-h2">Program Specific Outcomes (PSOs)</h2>
          <div class="pso-section">
            <h3>PSOs</h3>
            <ul>
              <li>
                🎯 <b>PSO 1:</b> •	The Graduates of this program with proficiency in Structural Design and drawing which will excel in the core areas of structural Design in civil Engineering.
              </li>
              <li>
                🎯 <b>PSO 2:</b> •	The Graduates of this Programme with proficiency in construction materials and technology produce detailed drawings, write specification, prepare cost estimates and prepare digital mapping and pursue higher studies in civil engineering.
              </li>
            </ul>
          </div>
        </div>
      </div>

        <!-- PEO,PSO //-->
         <!-- Lab Facilities  -->

    <div id="lab-facilities" style="display: none">
      <h1 class="lab-facilities-title">Lab Facilities</h1>
          
  <div class="gallery">
    <img src="assets/Department/Civil/Lab_facilities/lab1.jpg" alt="Photo 1">
    <img src="assets/Department/Civil/Lab_facilities/lab2.jpg" alt="Photo 2">
    <img src="assets/Department/Civil/Lab_facilities/lab3.jpg" alt="Photo 3">
    <img src="assets/Department/Civil/Lab_facilities/lab4.jpg" alt="Photo 4">
    <img src="assets/Department/Civil/Lab_facilities/lab5.jpg" alt="Photo 5">
    <img src="assets/Department/Civil/Lab_facilities/lab6.jpg" alt="Photo 6">
    <!-- Add more images as needed -->
  </div>
</div>
          <!-- Lab Facilities //  -->
           <!-- Placement  -->
    <div id="placement" style="animation: fadeIn 1.2s ease-in-out;">
    <h2 class="lab-facilities-title">Placement Profile</h2>
    <table>
  <thead>
    <tr>
      <th>S.NO.</th>
      <th>Academic Year</th>
      <th>Students Placed</th>
      <th>Recruiting Organizations</th>
      <th>Compensation Details</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>2019–2020</td>
      <td>30</td>
      <td rowspan="6">
        McDermott<br>
        CAD Software Pvt. Ltd.<br>
        K.B.R Pvt. Ltd.<br>
        Woods India Pvt. Ltd.<br>
        Technip Energies Pvt. Ltd.<br>
        Rebar Design and Detailing<br>
        M.D.S. Rebar Pvt. Ltd.<br>
        NarDil Enterprises Pvt. Ltd.<br>
        A.G.F. Technik Pvt. Ltd.
      </td>
      <td>
        Highest salary – Rs.42,000
      </td>
    </tr>
    <tr>
      <td>2</td>
      <td>2020–2021</td>
      <td>11</td>
      <td>—</td>
    </tr>
    <tr>
      <td>3</td>
      <td>2021–2022</td>
      <td>26</td>
      <td>—</td>
    </tr>
    <tr>
      <td>4</td>
      <td>2022–2023</td>
      <td>18</td>
      <td>
        Medium salary – Rs.27,000
      </td>
    </tr>
    <tr>
      <td>5</td>
      <td>2023–2024</td>
      <td>19</td>
      <td>—</td>
    </tr>
    <tr>
      <td>6</td>
      <td>2024–2025</td>
      <td>19</td>
      <td>
        Lowest salary – Rs.15,000
      </td>
    </tr>
  </tbody>
</table>

</div>

            <!-- Placement //  -->
             <!-- Rank Holders  -->
    <div id="rankholders" style="display: none">
    <table>
  <thead>
    <tr>
      <th>S.No.</th>
      <th>Academic Year</th>
      <th>Name of the Rank Holders (Gold Medalist)</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>2019–2020</td>
      <td>Venkatesh Raju. K</td>
    </tr>
    <tr>
      <td>2</td>
      <td>2020–2021</td>
      <td>Jeromiya Mariyal .P</td>
    </tr>
    <tr>
      <td>3</td>
      <td>2021–2022</td>
      <td>Nasrin Banu. E</td>
    </tr>
    <tr>
      <td>4</td>
      <td>2022–2023</td>
      <td>A. Kaviya</td>
    </tr>
    <tr>
      <td>5</td>
      <td>2023–2024</td>
      <td>Varsha. R</td>
    </tr>
  </tbody>
</table>

</div>
<!-- Student's Achievements  -->
 
<div id="studentsachievement" style="display: none">
 <h2>Student Achievements</h2>
 <h2 style="font-size: 24px; color: #2c3e50; margin-bottom: 10px;">Student Achievements</h2>

<h3 style="font-size: 20px; color: #34495e; margin-bottom: 8px;">Academic & Technical Competitions</h3>
<ul style="margin-left: 20px; font-size: 16px; color: #333;">
  <li>Selvi G.N. Vivekaa Sree & B. Sharmili – Second place at the National Level Technical Symposium, Najiah Lingammal Polytechnic College (28.02.2025) – “Recycled Materials in Construction”</li>
  <li>Selvi G.N. Vivekaa Sree & B. Sharmili – Third place at the State Level Symposium, Thanthai Rover Institute of Polytechnic (15.02.2025) – “Smart Materials Construction”</li>
  <li>Selvi S.B. Preethika & U. Priyadharsini – First place at State Level Symposium, Thanthai Rover Institute of Polytechnic (15.02.2025) – “Smart Materials in Construction”</li>
  <li>Selvi S.B. Preethika – Third place in State Level Technical Quiz, Thanthai Rover Institute of Polytechnic (15.02.2025)</li>
</ul>

<h3 style="font-size: 20px; color: #34495e; margin-top: 20px; margin-bottom: 8px;">Sports Achievements</h3>
<ul style="margin-left: 20px; font-size: 16px; color: #333;">
  <li>Selvi B. Sharmili – First place in District Level Badminton, Kongunadu Polytechnic College (21.01.2025)</li>
  <li>Selvi B. Sharmili – First place in District Level Chess, Seshasayee Institute of Technology</li>
  <li>
    Selvi D. Thenmozhi – Multiple placements in Divisional Level Competitions:
    <ul style="margin-left: 20px;">
      <li>2nd place – Throw Ball</li>
      <li>3rd place – Kabbadi (twice)</li>
      <li>2nd place – Volleyball</li>
      <li>1st place – Table Tennis</li>
    </ul>
  </li>
  <li>
    Selvi R. Santhiya – Multiple placements in Divisional Level Competitions:
    <ul style="margin-left: 20px;">
      <li>1st place – Kho-Kho</li>
      <li>2nd place – Volleyball</li>
      <li>3rd place – Kabbadi</li>
      <li>2nd place – Throw Ball</li>
    </ul>
  </li>
</ul>
</div>
              <!-- Rank Holders //  -->
                <!-- MoU Signed -->
        <div id="mou" style="display: none;animation: fadeIn 1.2s ease-in-out;">
          <div class="syllabus-title">MoU Signed</div>
          <div class="syllabus-list" style="display: flex; flex-direction: row; gap: 20px; flex-wrap: wrap; align-items: flex-start;">
    <div class="syllabus-card"  style="width: 200px;">
      <a
        href="./assets/Department/Civil/MoU/mou-signed.pdf"
        class="download-btn"
        target="_blank"
        ><i class="fa fa-download"></i> MoU Details</a>
    </div>
    <div class="syllabus-card"  style="width: 200px;">
      <a
        href="./assets/Department/Civil/MoU/Collaboration.pdf"
        class="download-btn"
        target="_blank"
        ><i class="fa fa-download"></i> MoU Collabration</a>
    </div>
  </div>
        </div>
        <!-- Mou Signed //  -->

   
    <!-- footer -->
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 col-md-7 col-sm-7 col-12">
            <div
              class="location_map-wrapper aos"
              data-aos="fade"
              data-aos-duration="2000"
              data-aos-easing="linear"
            >
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3295.5130946605836!2d78.72464615218225!3d10.807664854422251!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3baaf48d12ef1447%3A0xa8390425871e6afe!2sSESHASAYEE%20INSTITUTE%20OF%20TECHNOLOGY!5e0!3m2!1sen!2sin!4v1736248854680!5m2!1sen!2sin"
                style="border: 0"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
              >
              </iframe>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-3 col-12">
            <div class="footer_content aos">
              <h4 class="footer_header">Address</h4>

              <p class="footer_text">Thanjore Main Road,</p>
              <p class="footer_text">Ariyamangalam, Kamaraj Nagar,</p>
              <p class="footer_text">Trichy-620010</p>
              <p class="footer_text">Tamilnadu,India</p>
            </div>
          </div>
          <div class="col-lg-2 col-md-7 col-sm-2 col-12">
            <div class="footer_content aos">
              <h4 class="footer_header">Useful Links</h4>
              <a href="./placement/Placement-cell.html">Placement</a><br>
              <a href="#">Helpdesk</a>
              <a href="#">Scholarships</a>
              <a href="#">Contact</a><br>
              <a href="#">Exam</a>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <section class="copyright-sec">
      <div class="row">
        <div class="col-6">
          <center>
            <p><span>Copyright</span> <b>SIT-Trichy </b> All Rights Reserved</p>
          </center>
        </div>
        <div class="col-6">
          <center>
            <p>Designed By : <b>Department of Computer Engineering</b></p>
          </center>
        </div>
      </div>
    </section>    <!-- footer // -->
     
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- jquery -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
      integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
<script>
const primaryHeader = document.querySelector(".primary-header");
const highlightText = document.querySelector(".header_highlight-text");
const logoWrapper = document.querySelector(".header_logo-wrapper");
  function showSection(element, sectionId) {
  // Hide all sections
  document
    .querySelectorAll(
      "#department-section, #vision-container, #parent-faculty, #syllabus, #PAC, #ppp, #lab-facilities, #placement, #rankholders, #mou, #studentsachievement"
    )
    .forEach((section) => {
      section.style.display = "none";
    });

  // Show the selected section if it exists
  if (sectionId) {
    const selectedSection = document.getElementById(sectionId);
    if (selectedSection) {
      selectedSection.style.display = "block";
    } else {
      console.error(`Section with id "${sectionId}" not found.`);
    }
  }

  // Remove active class from all sidebar links
  document.querySelectorAll(".department-sidebar a").forEach((link) => {
    link.classList.remove("department-active");
  });

  // Add active class to the clicked link
  if (element && element.tagName === "A") {
    element.classList.add("department-active");
  }
}
if (primaryHeader || highlightText) {
  window.addEventListener("scroll", () => {
    if (window.scrollY > 85) {
      primaryHeader.classList.add("scrolled");
      highlightText.style.height = "0px";
      highlightText.style.padding = "0px";
    } else {
      primaryHeader.classList.remove("scrolled");
      highlightText.style.height = "auto";
      highlightText.style.padding = "10px 0px";
    }
  });
} else {
  console.error("Primary header or highlight text not found.");
}

function showPDF() {
  const pdfContainer = document.getElementById("pdfContainer");
  if (pdfContainer) {
    pdfContainer.style.display = "block";
  } else {
    console.error('PDF container with id "pdfContainer" not found.');
  }
}
</script>
    <!-- owl carousel -->

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"
      integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
      integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>

    <script>
      function toggleDropdown() {
        let dropdown = document.getElementById("department-faculty-dropdown");
        dropdown.classList.toggle("department-expand");
      }
    </script>

    <!-- aos -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


    <!-- <script src="./assets/js/script.js"></script> -->

    <!-- aos initialze -->
    <script>
      AOS.init({
        duration: 2000, // Set a shorter duration for animations.
        once: false, // False Ensures the animation happens everytime when scrolled
        // offset: 200, // Adjust the offset if overflow still occurs
      });
    </script>
  </body>
</html>
