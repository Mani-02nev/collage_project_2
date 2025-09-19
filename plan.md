# Day 1: Figma Design & Website Analysis Plan

## Objective
Analyze the existing SIT website and create a modern, responsive Figma design for desktop and mobile.

---

## Step 1: Analyze the Existing Website
- [x] Open [SIT Website](https://www.sittrichy.in/)
- [x] Examine each page: Home, About Us, Academics, Campus Life, Placements, Contact
- [x] Note down:
  - Navigation menu structure
  - Header & footer layout
  - Page sections and content blocks
  - Colors, fonts, and styles
  - Functional elements (sliders, forms, videos)
- [ ] Identify areas to improve:
  - Readability
  - Layout clarity
  - Mobile responsiveness

---

## Step 2: Plan the New Layout
- [ ] Decide sections for each page:
  - **Home:** Hero banner, news, quick links
  - **About Us:** Mission, history, leadership
  - **Academics:** Departments, courses, admission
  - **Campus Life:** Facilities, events, clubs
  - **Placements:** Recruiters, statistics
  - **Contact:** Map, contact form
- [ ] Sketch rough wireframes on paper or directly in Figma
- [ ] Focus on hierarchy: highlight important info

---

## Step 3: Start Figma Design
- [ ] Open Figma and create a new project file
- [ ] Set up artboards:
  - Desktop: 1440px
  - Tablet: 768px
  - Mobile: 375px
- [ ] Design header & navigation:
  - Logo on left
  - Menu on right
  - Sticky header
- [ ] Design Hero Section:
  - Banner image
  - College name & tagline
  - Call-to-action buttons (Apply Now, Admissions)
- [ ] Plan section blocks (cards for announcements, departments)
- [ ] Design footer (contact info, social links, quick links)

---

## Step 4: Add Branding Elements
- [ ] Use college colors for buttons, headings, highlights
- [ ] Choose readable fonts (Roboto, Poppins, Open Sans)
- [ ] Add icons or illustrations for departments, facilities, achievements

---

## Step 5: Create Interactive Prototype (Optional)
- [ ] Link buttons to sections/pages
- [ ] Show dropdown menus, sliders, and forms
- [ ] Preview design in Figma prototype mode (desktop & mobile)

---

## Step 6: Review & Finalize
- [ ] Compare with the original site:
  - Clean layout?
  - Easier navigation?
  - Modern professional look?
- [ ] Make adjustments
- [ ] Export Figma assets (images, icons, logos) for Day 2 development

---

## ✅ Expected Outcome by End of Day 1
- Complete analysis of current website
- Wireframes for each page
- Full Figma mockups (desktop & mobile)
- Assets ready for development

<script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/12.3.0/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/12.3.0/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyC5wDc5ISfAUWlcKgu95Nyclti2W8JvDks",
    authDomain: "collage-sit-mani.firebaseapp.com",
    projectId: "collage-sit-mani",
    storageBucket: "collage-sit-mani.firebasestorage.app",
    messagingSenderId: "880675754416",
    appId: "1:880675754416:web:be3536cf1e818fc9cb8675",
    measurementId: "G-3L0P3RS31B"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
</script>
             