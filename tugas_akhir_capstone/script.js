
const btnMenu = document.getElementById("btn-menu");
const navMenu = document.getElementById("nav-menu");


btnMenu.addEventListener("click", () => {
  
  if (navMenu.classList.contains("hidden")) {
    
    navMenu.classList.remove("hidden");
  
    navMenu.classList.add(
      "absolute",
      "top-full",
      "left-0",
      "w-full",
      "bg-white",
      "p-6",
      "shadow-xl",
      "border-t",
      "border-gray-100"
    );
  } else {

    navMenu.classList.add("hidden");

    navMenu.classList.remove(
      "absolute",
      "top-full",
      "left-0",
      "w-full",
      "bg-white",
      "p-6",
      "shadow-xl",
      "border-t",
      "border-gray-100"
    );
  }
});
