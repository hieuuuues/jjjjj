export function initializeSidebar() {
  const sidebar = document.querySelector(".sidebar");
  const toggleBtn = document.querySelector(".toggle-btn");
  const overlay = document.querySelector(".overlay");
  const headerUserBtn = document.getElementById("headerUserBtn");
  const userDropdown = document.getElementById("userDropdown");
  const userAvatar = document.getElementById("userAvatar");

  function updateDropdownPosition() {
    if (window.innerWidth > 768) {
      userDropdown.style.left = sidebar.classList.contains("expanded")
        ? `calc(${getComputedStyle(document.documentElement).getPropertyValue(
            "--sidebar-width"
          )} + 10px)`
        : `calc(${getComputedStyle(document.documentElement).getPropertyValue(
            "--sidebar-collapsed-width"
          )} + 10px)`;
    }
  }

  if (headerUserBtn && userDropdown) {
    headerUserBtn.addEventListener("click", () => {
      userDropdown.classList.toggle("active");
      updateDropdownPosition();
    });
  }

  if (userAvatar && userDropdown) {
    userAvatar.addEventListener("click", () => {
      userDropdown.classList.toggle("active");
      updateDropdownPosition();
    });
  }

  document.addEventListener("click", (event) => {
    if (
      !headerUserBtn.contains(event.target) &&
      !userDropdown.contains(event.target) &&
      !userAvatar.contains(event.target)
    ) {
      userDropdown.classList.remove("active");
    }
  });

  if (window.innerWidth > 768) {
    sidebar.addEventListener("mouseenter", () => {
      sidebar.classList.add("expanded");
      updateDropdownPosition();
    });

    sidebar.addEventListener("mouseleave", () => {
      sidebar.classList.remove("expanded");
      updateDropdownPosition();
    });

    overlay.addEventListener("click", () => {
      sidebar.classList.remove("expanded");
      updateDropdownPosition();
    });
  }

  toggleBtn.addEventListener("click", () => {
    sidebar.classList.toggle("expanded");
    updateDropdownPosition();
  });
}
