<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Department of CSE</title>
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
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
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
          href="Computer.php#"
          id="department-home-side"
          onclick="showSection(this,'department-section');"
          class="department-active"
          >Department of CSE</a
        >
        <a
          href="Computer.php#"
          onclick="showSection(this,'vision-container')"
          id="department-academic"
          >Vision & Mission</a
        >
        <a href="Computer.php#" onclick="toggleDropdown()">Faculty Details</a>
        <div id="department-faculty-dropdown" class="department-dropdown">
          <a
            href="Computer.php#"
            onclick="showSection(this,'parent-faculty'); return false;"
            style="background-color: white; color: black; width: 100%"
          >
            Faculty Profile
          </a>
        </div>
        <a href="Computer.php#" onclick="showSection(this,'syllabus')" 
          >Curriculam & Syllabus</a
        >
        <a href="Computer.php#" onclick="showSection(this,'ppp')" 
          >PEOs,POs and PSOs</a
        >
        <a href="Computer.php#" onclick="showSection(this,'lab-facilities')"
          >Lab Facilities</a
        >
        <a href="Computer.php#" onclick="showSection(this,'placement')"
          >Placement</a
        >
        <a href="Computer.php#" onclick="showSection(this,'rankholders')"
          >Rank Holders</a
        >
        <a href="Computer.php#" id="department-placement"
          >Student Achievements</a
        >
        <a href="Computer.php#" onclick="showSection(this,'PAC')"
          >Program Advisory Committee</a
        >
        <a href="Computer.php#" onclick="showSection(this,'mou')"
          >MoU Signed</a
        >
        <a href="http://www.sitalumni.in/sitaavoice.html" target="_new"
          >Newsletter</a
        >
      </div>
      <div class="department-content">
        <div class="department-header">Department of Computer Engineering</div>
        <marquee
          behavior=""
          direction=""
          style="background-color: gray; padding: 10px; color: darkblue"
          >Computer Engineering is
          <strong>
            accredited by National Board of Accreditation (NBA)
          </strong></marquee
        >
        <div class="department-active" id="department-section">
          <h2>About the Department</h2>
         <p style="text-align:justify"> The Department of Computer Engineering, established in 1990, has been dedicated to delivering quality technical education and fostering innovation in the field of computing. Attaining autonomous status in 1994, the department gained the flexibility to design its own curriculum, aligning with industry trends and technological advancements. With state-of-the-art laboratories, experienced faculty, and a dynamic learning environment, the department equips students with practical skills in programming, software development, and emerging technologies. Committed to academic excellence, it emphasizes research, entrepreneurship, and industry collaboration, ensuring that graduates are well-prepared to excel in their careers and contribute to technological progress.</p>
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
                  src="assets/Department/Computer/Staff_photo/cshod.jpg"
                  alt="Faculty Image"
                />
              </div>
              <div class="computer-faculty-details">
                <h2 class="computer-faculty-name">
                  Thiru.T.MUTHAMIL SELVAM,M.Tech.
                </h2>
                <h3 class="computer-faculty-position">
                  Head of the Department (i/c)
                </h3>
                <div style="display: flex; gap: 10px">
                  <p class="computer-faculty-email">
                    sitcsedepartment@gmail.com
                  </p>
                  <p>
                    <strong>Mobile:</strong>
                    <span class="computer-faculty-id">9994499781</span>
                  </p>
                </div>
                <p class="computer-faculty-description">
                Mr.T.Muthamil Selvam is the Head of the Department of Computer Engineering (i/c), bringing with him a strong academic and professional background. He holds a B.E. in Computer Engineering and an M.Tech in Advanced Computing, complemented by industry-recognized certifications such as CCNA (Cisco Certified Network Associate) and Microsoft Certified Professional (MCP).
With a keen interest in curriculum development, he serves as an active member of the DOTE (Directorate of Technical Education) syllabus committee, contributing to the design and modernization of technical education in the state.
</p>
                <p class="computer-faculty-description">
                He has developed custom software solutions for Autonomous Examinations and Student Attendance Management, demonstrating his commitment to academic digitization and efficiency.
A dedicated educator, Mr. T. Muthamil Selvam specializes in Programming Languages and has a passion for nurturing students' technical and problem-solving skills. His leadership and innovation continue to enhance the department's academic and technical excellence.
                </p>
                <p>
                  <strong>AICTE ID:</strong>
                  <span class="computer-faculty-id">1-477942029</span>
                </p>
              </div>
            </div>
          </div>
          <!-- HOD Section //-->

          <!-- Teaching Staff Section -->

          <div id="teaching-staff-section" class="teaching-staff-container">
            <h2 class="teaching-staff-title">Teaching Staff</h2>

            <div class="teaching-staff-grid">
              <div class="teaching-staff-box">
                <div class="teaching-staff-image">
                  <img
                    src="assets/Department/Computer/Staff_photo/staff3.jpg"
                    alt="Teaching Staff Image"
                  />
                </div>
                <div class="teaching-staff-details">
                  <h3 class="teaching-staff-position">Lecturer</h3>
                  <h2 class="teaching-staff-name">Thiru.R.KARTHIKEYAN, B.E</h2>
                  <p>
                    <strong>AICTE ID:</strong>
                    <span class="computer-faculty-id">1-44734514958</span>
                  </p>
                  <p class="teaching-staff-short-desc">
                    Expert in AI & ML, passionate about student mentorship.
                  </p>
                  <a href="./assets/Department/Computer/Staff_Profile/karthiprofile.pdf" target="_blank">
                  <button class="view-profile-btn">View Profile</button>
                </div>
              </div>

              <div class="teaching-staff-box">
                <div class="teaching-staff-image">
                  <img
                    src="assets/Department/Computer/Staff_photo/staff1.jpg"
                    alt="Teaching Staff Image"
                  />
                </div>
                <div class="teaching-staff-details">
                  <h3 class="teaching-staff-position">Lecturer</h3>
                  <h2 class="teaching-staff-name">Tmt.K.DEEPALAKSHMI,B.E</h2>
                  <p>
                    <strong>AICTE ID:</strong>
                    <span class="computer-faculty-id">1-44239326371</span>
                  </p>
                  <p class="teaching-staff-short-desc">
                    Specializes in Data Structures
                  </p>
                  <a href="./assets/Department/Computer/Staff_Profile/deepaprofile.pdf" target="_blank">
                  <button class="view-profile-btn">View Profile</button>
                </div>
              </div>
              <div class="teaching-staff-box">
                <div class="teaching-staff-image">
                  <img
                    src="assets/Department/Computer/Staff_photo/staff2.jpeg"
                    alt="Teaching Staff Image"
                  />
                </div>
                <div class="teaching-staff-details">
                  <h3 class="teaching-staff-position">Lecturer</h3>
                  <h2 class="teaching-staff-name">Selvi.I.GLORY B.E</h2>
                  <p>
                    <strong>AICTE ID:</strong>
                    <span class="computer-faculty-id">1-44238014634</span>
                  </p>
                  <p class="teaching-staff-short-desc">
                    Specializes in Operating System
                  </p>
                  <a href="./assets/Department/Computer/Staff_Profile/gloryprofile.pdf" target="_blank">
                  <button class="view-profile-btn">View Profile</button>
                </div>
              </div>
            </div>
          </div>

          <!-- Teaching Staff Section //-->

          <!-- Lab Assistant Section -->

          <div id="assistant-staff-section" class="assistant-staff-container">
            <h2 class="assistant-staff-title">Lab Assistant</h2>

            <div class="assistant-staff-grid">
              <div class="assistant-staff-card">
                <div class="assistant-staff-image">
                  <img
                    src="assets/Department/Computer/Staff_photo/staff5.jpeg"
                    alt="Assistant Staff Image"
                  />
                </div>
                <div class="assistant-staff-details">
                  <h3 class="assistant-staff-position">LABORATORY ASSISTANT(SG)</h3>
                  <h2 class="assistant-staff-name">Thiru.T.DURAIRAJ,D.E.E.E</h2>
                                                   </div>
              </div>
              <div class="assistant-staff-card">
                <div class="assistant-staff-image">
                  <img
                    src="assets/Department/Computer/Staff_photo/staff6.jpeg"
                    alt="Assistant Staff Image"
                  />
                </div>
                <div class="assistant-staff-details">
                  <h3 class="assistant-staff-position">LABORATORY ASSISTANT</h3>
                  <h2 class="assistant-staff-name">Thiru.PRASSANA,D.E.E.E</h2>
                
                           
                                 </div>
              </div>

              <div class="assistant-staff-card">
                <div class="assistant-staff-image">
                  <img
                    src="assets/Department/Computer/Staff_photo/staff4.png"
                    alt="Assistant Staff Image"
                  />
                </div>
                <div class="assistant-staff-details">
                  <h3 class="assistant-staff-position">LABORATORY ASSISTANT</h3>
                  <h2 class="assistant-staff-name">Tmt.R.SATHYA,DCE, B.C.A</h2>
                                                      
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
        href="./assets/Department/Computer/Curriculam&Syllabus/escheme.pdf"
        class="download-btn"
        target="_blank"
        ><i class="fa fa-download"></i>E-Syllabus</a>
    </div>
    
    <div class="syllabus-card" data-aos="fade-up" style="width: 200px;">
      <a
        href="./assets/Department/Computer/Curriculam&Syllabus/fscheme.pdf"
        class="download-btn"
        target="_blank"
        ><i class="fa fa-download"></i>F-Syllabus</a>
    </div>
    
    <div class="syllabus-card" data-aos="fade-up" style="width: 200px;">
      <a
        href="./assets/Department/Computer/Curriculam&Syllabus/g scheme final new doc.pdf"
        class="download-btn"
        target="_blank"
        ><i class="fa fa-download"></i>G-Syllabus</a>
    </div>
  </div>
</div>


      <!-- vision -->
      <div class="vision-safe">
        <div id="vision-container">
          <h1 class="vision-title">Vision</h1>
          <p class="vision-text">
            To foster technically proficient, creative and self-governing
            diploma computer engineers by means of efficient teaching and
            learning methods to meet industrial and social requirements.
          </p>
          <h2 class="mission-title">Mission</h2>
          <ul class="mission-list">
            <li>
              To provide quality and contemporary education through innovative
              teaching-learning process and effective resource utilization.
            </li>
            <li>
              To inculcate the spirit of self-confidence, teamwork, professional
              ethics, and environmental awareness.
            </li>
            <li>
              To reinforce entrepreneurship skills by means of
              industry-institution interaction.
            </li>
            <li>To ignite students with ideas of research and development.</li>
          </ul>
        </div>
      </div>
      <!-- vision //-->

      <!-- PAC Section-->

      <div id="PAC">
        <button onclick="showPDF()">📄 View PAC Letter</button>
        <iframe id="pdfContainer" src="assets/Department/Computer/PAC/Pac meeting letter.pdf"></iframe>
    </div>

      <!-- PAC Section // -->

         <!-- PEO and PSO  -->
         <div id="ppp" style="display: none;">
        <div class="peo-container">
          <h2 class="peo-h2">Program Educational Objectives (PEOs)</h2>
          <div class="peo-section">
            <h3>PEOs</h3>
            <ul>
              <li>
                1️⃣ Our graduates will apply the knowledge of computer
                engineering to plan and design solutions for real-world
                challenges.
              </li>
              <li>
                2️⃣ Our graduates will pursue higher degrees, engage in research,
                or practice careers in the ICT domain.
              </li>
              <li>
                3️⃣ Our graduates will widen their knowledge and expertise by
                lifelong learning and execute their career with social concern
                and professional ethics.
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
                📌 <b>Basic and Discipline-specific knowledge:</b> Apply
                knowledge of mathematics, science, and engineering fundamentals
                to solve engineering problems.
              </li>
              <li>
                📌 <b>Problem analysis:</b> Identify and analyze well-defined
                engineering problems using standard methods.
              </li>
              <li>
                📌 <b>Design/Development of solutions:</b> Design solutions for
                technical problems and assist with system or process design.
              </li>
              <li>
                📌 <b>Engineering Tools, Experimentation & Testing:</b> Use
                modern tools and techniques to conduct standard tests and
                measurements.
              </li>
              <li>
                📌
                <b
                  >Engineering practices for society, sustainability &
                  environment:</b
                >
                Apply technology in the context of society, sustainability, and
                ethics.
              </li>
              <li>
                📌 <b>Project Management:</b> Use engineering management
                principles individually or as a team to manage projects and
                communicate effectively.
              </li>
              <li>
                📌 <b>Life-long learning:</b> Ability to analyze individual
                needs and stay updated with technological changes.
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
                🎯 <b>PSO 1:</b> Apply acquired knowledge and skills to develop
                software and web applications.
              </li>
              <li>
                🎯 <b>PSO 2:</b> Be proficient in administering and maintaining
                computer systems, servers, and networks.
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
    <img src="assets/Department/Computer/Lab_facilities/lab1.jpg" alt="Photo 1">
    <img src="assets/Department/Computer/Lab_facilities/lab2.jpg" alt="Photo 2">
    <img src="assets/Department/Computer/Lab_facilities/lab3.jpg" alt="Photo 3">
    <img src="assets/Department/Computer/Lab_facilities/lab4.jpg" alt="Photo 4">
    <img src="assets/Department/Computer/Lab_facilities/lab5.jpg" alt="Photo 5">
    <img src="assets/Department/Computer/Lab_facilities/lab6.jpg" alt="Photo 6">
     <img src="assets/Department/Computer/Lab_facilities/lab7.jpg" alt="Photo 7">
     <img src="assets/Department/Computer/Lab_facilities/lab8.jpg" alt="Photo 8">
    <img src="assets/Department/Computer/Lab_facilities/lab9.jpg" alt="Photo 9">
    <img src="assets/Department/Computer/Lab_facilities/lab10.jpg" alt="Photo 10">
    <img src="assets/Department/Computer/Lab_facilities/lab11.jpg" alt="Photo 11">
    <img src="assets/Department/Computer/Lab_facilities/lab12.jpg" alt="Photo 12">

  </div>
</div>
          <!-- Lab Facilities //  -->

                          <!-- Placement  -->
    <div id="placement" style="animation: fadeIn 1.2s ease-in-out;">
    <h2 class="lab-facilities-title">Placement Profile</h2>
    <div class="syllabus-list" style="display: flex; flex-direction: row; gap: 20px; flex-wrap: wrap; align-items: flex-start;">
    <div class="syllabus-card" data-aos="fade-up" style="width: 240px;">
      <a
        href="assets/Department/Computer/Placement/Placement_Computer.pdf"
        class="download-btn"
        target="_blank"
        ><i class="fa fa-download"></i> Placement Details</a>
    </div>
    </div>
</div>

        
           
              
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
            <td>2017–2020 BATCH</td>
      <td>FAIROSE PARVEEN. M</td>
    </tr>
    <tr>
      <td>2</td>
      <td>2018–2021 BATCH</td>
      <td>MADAHV PRASAD.J</td>
    </tr>
    <tr>
      <td>3</td>
      <td>2019–2022 BATCH</td>
      <td>PRASANNA SRIDHAR.M</td>
    </tr>
    <tr>
      <td>4</td>
      <td>2020–2023 BATCH</td>
      <td>PRVIN KUMAR.M</td>
    </tr>
    <tr>
      <td>5</td>
      <td>2021–2024 BATCH</td>
      <td>ARSH PARVIN.S</td>
    </tr>
  </tbody>
</table>

</div>
<!-- Rank Holders //  -->
 
  <!-- MoU Signed -->
        <div id="mou" style="display: none">
          <div class="syllabus-title">MoU Signed</div>
          <div class="syllabus-list">
            <div class="syllabus-card" data-aos="fade-up">
              <a
                href="assets/Department/Computer/MoU/CCF_000038.pdf"
                class="download-btn"
                ><i class="fa fa-download"></i> Download</a
              >
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
    </section>      <!-- footer // -->

    

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
      "#department-section, #vision-container, #parent-faculty, #syllabus, #PAC, #ppp, #lab-facilities, #placement, #rankholders, #mou"
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
