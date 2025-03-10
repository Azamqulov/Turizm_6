document.addEventListener("DOMContentLoaded", () => {
    // Cookie Banner
    const cookieBanner = document.getElementById("cookie-banner")
    const acceptCookiesBtn = document.getElementById("accept-cookies")
  
    // Check if user has already accepted cookies
    if (!localStorage.getItem("cookiesAccepted")) {
      cookieBanner.style.display = "flex"
    } else {
      cookieBanner.style.display = "none"
    }
  
    // Handle cookie acceptance
    acceptCookiesBtn.addEventListener("click", () => {
      localStorage.setItem("cookiesAccepted", "true")
      cookieBanner.style.display = "none"
    })
  
    // Mobile Menu Toggle
    const mobileMenuToggle = document.getElementById("mobile-menu-toggle")
    const navList = document.getElementById("nav-list")
  
    mobileMenuToggle.addEventListener("click", () => {
      navList.classList.toggle("active")
      mobileMenuToggle.classList.toggle("active")
      document.body.classList.toggle("menu-open")
    })
  
    // Close mobile menu when clicking outside
    document.addEventListener("click", (event) => {
      if (
        navList.classList.contains("active") &&
        !navList.contains(event.target) &&
        !mobileMenuToggle.contains(event.target)
      ) {
        navList.classList.remove("active")
        mobileMenuToggle.classList.remove("active")
        document.body.classList.remove("menu-open")
      }
    })
  
    // Scroll animations
    const animateOnScroll = document.querySelectorAll(".animate-on-scroll")
  
    function checkScroll() {
      const triggerBottom = window.innerHeight * 0.8
  
      animateOnScroll.forEach((element) => {
        const elementTop = element.getBoundingClientRect().top
  
        if (elementTop < triggerBottom) {
          element.classList.add("animated")
        }
      })
    }
  
    // Initial check
    checkScroll()
  
    // Check on scroll
    window.addEventListener("scroll", checkScroll)
  
    // Header scroll effect
    const header = document.querySelector(".header")
  
    window.addEventListener("scroll", () => {
      if (window.scrollY > 100) {
        header.classList.add("scrolled")
      } else {
        header.classList.remove("scrolled")
      }
    })
  
    // FAQ Accordion
    const faqItems = document.querySelectorAll(".faq-item")
  
    faqItems.forEach((item) => {
      const question = item.querySelector(".faq-question")
  
      question.addEventListener("click", () => {
        // Close all other items
        faqItems.forEach((otherItem) => {
          if (otherItem !== item) {
            otherItem.classList.remove("active")
          }
        })
  
        // Toggle current item
        item.classList.toggle("active")
      })
    })
  
    // Form Submission with animation
    const contactForm = document.querySelector(".contact-form")
  
    if (contactForm) {
      const formInputs = contactForm.querySelectorAll("input, select, textarea")
  
      // Add focus animations
      formInputs.forEach((input) => {
        input.addEventListener("focus", function () {
          this.parentElement.classList.add("focused")
        })
  
        input.addEventListener("blur", function () {
          this.parentElement.classList.remove("focused")
        })
      })
  
      contactForm.addEventListener("submit", (e) => {
        e.preventDefault()
  
        // Get form values
        const name = document.getElementById("name").value
        const email = document.getElementById("email").value
        const subject = document.getElementById("subject").value
        const message = document.getElementById("message").value
  
        // Add submission animation
        contactForm.classList.add("submitting")
  
        // Simulate form submission delay
        setTimeout(() => {
          // Here you would typically send the form data to a server
          alert("Teşekkürler " + name + "! Mesajınız gönderildi. En kısa sürede size dönüş yapacağız.")
  
          // Reset form
          contactForm.reset()
          contactForm.classList.remove("submitting")
        }, 1000)
      })
    }
  
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
      anchor.addEventListener("click", function (e) {
        e.preventDefault()
  
        const targetId = this.getAttribute("href")
  
        if (targetId === "#") return
  
        const targetElement = document.querySelector(targetId)
  
        if (targetElement) {
          // Close mobile menu if open
          if (navList.classList.contains("active")) {
            navList.classList.remove("active")
            mobileMenuToggle.classList.remove("active")
            document.body.classList.remove("menu-open")
          }
  
          // Scroll to target with smooth animation
          window.scrollTo({
            top: targetElement.offsetTop - 80, // Adjust for header height
            behavior: "smooth",
          })
        }
      })
    })
  
    // Add animation classes to elements
    function addAnimationClasses() {
      // Add animation classes to section titles
      document.querySelectorAll(".section-title").forEach((title, index) => {
        title.classList.add("animate-on-scroll")
      })
  
      // Add animation classes to destination cards
      document.querySelectorAll(".destination-card").forEach((card, index) => {
        card.classList.add("animate-on-scroll")
        card.style.transitionDelay = `${index * 0.1}s`
      })
  
      // Add animation classes to cuisine items
      document.querySelectorAll(".cuisine-item").forEach((item, index) => {
        item.classList.add("animate-on-scroll")
        item.style.transitionDelay = `${index * 0.1}s`
      })
  
      // Add animation classes to tip cards
      document.querySelectorAll(".tip-card").forEach((card, index) => {
        card.classList.add("animate-on-scroll")
        card.style.transitionDelay = `${index * 0.1}s`
      })
    }
  
    // Initialize animations
    addAnimationClasses()
  
    // Parallax effect for hero section
    const hero = document.querySelector(".hero")
  
    if (hero) {
      window.addEventListener("scroll", () => {
        const scrollPosition = window.scrollY
        hero.style.backgroundPositionY = `${scrollPosition * 0.5}px`
      })
    }
  
    // Image hover effects
    const destinationImages = document.querySelectorAll(".destination-img")
  
    destinationImages.forEach((img) => {
      img.addEventListener("mousemove", function (e) {
        const { left, top, width, height } = this.getBoundingClientRect()
        const x = (e.clientX - left) / width
        const y = (e.clientY - top) / height
  
        this.style.transformOrigin = `${x * 100}% ${y * 100}%`
      })
    })
  })
  
  