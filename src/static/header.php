<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="This is a website about our Dairy." />
    <meta name="keywords" content="Dairy, Journal, Shessh" />
    <title>TwoHeartsMemoir</title>
    <link
      rel="shortcut icon"
      href="../icons/allentry2.png"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="../style/style.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@400;500;600;700&family=Quicksand:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <nav
    class="bg-[#ffffff] p-6 flex flex-row items-center justify-between"
  >
    <div class="nav-toggle z-20">
      <button class="p-1 rounded-full" id="nav-toggler">
        <img width="40px" src="../icons/navbar/ico-menu.png" alt="" />
      </button>
    </div>
    <div
      id="nav-links"
      class="nav-links text-primary-darkviolet absolute bg-accent-white left-0 top-0 right-0 md:right-auto bottom-0 p-5 z-10 rounded-e-md hidden"
    >
      <ul class="text-[1.3rem] flex flex-col gap-3 m-12 mt-16">
        <li class="active">
          <img
            class="inline"
            width="50px"
            src="../icons/navlinks/dashboard.png"
            alt=""
          /><a href="../pages/dashboard.html" class="ms-2">Dashboard</a>
        </li>
        <li>
          <img
            class="inline"
            width="40px"
            src="../icons/navlinks/newentry3.png"
            alt=""
          />
          <a href="../pages/newentry.html" class="ms-2">New Entry</a>
        </li>
        <li>
          <img
            class="inline"
            width="40px"
            src="../icons/navlinks/gallery.png"
            alt=""
          />
          <a href="../pages/gallery.html" class="ms-2">Gallery</a>
        </li>
        <li>
          <img
            class="inline"
            width="40px"
            src="../icons/navlinks/allentry2.png"
            alt=""
          />
          <a href="../pages/allentry.html" class="ms-2">All Entries</a>
        </li>
        <li>
          <img
            class="inline"
            width="40px"
            src="../icons/navlinks/profile.png"
            alt=""
          />
          <a href="../pages/profile.html" class="ms-2">Profile</a>
        </li>
      </ul>
    </div>
    <div class="nav-title">
      <h1 class="text-primary-darkviolet text-[1rem] md:text-2xl">
        TwoHeartsMemoir
      </h1>
    </div>
    <div class="nav-profile">
      <img width="40px" src="../icons/navbar/icon-cat.png" alt="" />
    </div>
  </nav>
	<script src="../js/scriptNav.js"></script>
  </body>
</html>
