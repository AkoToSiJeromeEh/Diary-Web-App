<?php
session_start();
include('../static/header.php')
?>
<section class="bg-pages-pattern bg-no-repeat bg-cover bg-center min-h-screen flex flex-col gap-5 overflow-hidden">
  <div>
    <?php
    include('../static/navbar.php');
    ?>
  </div>

  <div class=" flex flex-col gap-5">
    <div class="flex flex-row flex-wrap gap-4 p-5 items-center justify-center small:justify-start md:items-start">
      <button class="bg-secondary-lightviolet p-2 rounded-md border-slate-50 border-2">Relationship</button>
      <button class="bg-secondary-lightviolet p-2 rounded-md border-slate-50 border-2">Bonding</button>
      <button class="bg-secondary-lightviolet p-2 rounded-md border-slate-50 border-2">With Family</button>
      <button class="bg-secondary-lightviolet p-2 rounded-md border-slate-50 border-2">Aniversary</button>
      <button class="bg-secondary-lightviolet p-2 rounded-md border-slate-50 border-2">Achivement</button>
      <button class=" p-2 rounded-md border-slate-50 border-2">Clear Filter</button>
    </div>
    <div>
      <h1 class="mx-5 text-2xl border-b-2 border-cyan-50 p-1 tracking-wider text-primary-darkviolet">
        <i class="fa-solid fa-border-all"></i> All Entries
      </h1>
    </div>
    <div class="grid grid-cols-1 gap-4 mb-5 md:grid-cols-3 p-5 h-full">
      <div class="bg-accent-white p-4 self-center w-[95%] lg:w-full m-auto flex flex-col gap-4 rounded-2xl h-full">
        <div class="bg-accent-white p-4 self-center w-[95%] lg:w-full m-auto flex flex-col gap-4 rounded-2xl h-full">
          <div class="flex flex-col gap-2 sm:flex-row justify-between flex-wrap">
            <h1 class="text-primary-darkviolet text-4xl lg:text-[2rem]">
              Title Text
            </h1>
            <button class="text-white font-normal bg-primary-darkviolet rounded-2xl px-3 py-1 text-sm">
              Relationship
            </button>
          </div>
          <div class="flex flex-row flex-wrap gap-4 w-full justify-end ">
            <div>
              <button class="border-b-2 border-primary-darkviolet p-2 rounded-md text-black" id="edit-trigger">
                Edit
              </button>
            </div>
            <div>
              <button class="border-b-2 border-primary-darkviolet p-2 rounded-md text-black">
                Delete
              </button>
            </div>
          </div>
          <div>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec
              augue eget justo volutpat commodo. Etiam urna magna Lorem ipsum
              dolor sit amet, consectetur adipiscing elit. Nulla nec augue eget
              justo volutpat commodo. Etiam urna magnas
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="hidden" id="modal-cont">
      <div class="modal absolute lg:left-0 lg:right-0 flex items-center justify-center   lg:m-auto top-[6rem]   ">
        <div class="profile-other-interest p-5 lg:rounded-[20px] flex flex-col gap-8 bg-accent-white items-start lg:w-[50rem] lg:h-[30rem]  z-[100] md:w-full md:h-full  ">
          <div class="flex flex-row justify-between flex-wrap w-full">
            <div>
              <h1 class="text-lg ">Update Entry</h1>
            </div>
            <div>
              <button class="fa fa-xmark fa-lg  text-black" id="close-trigger">

              </button>
            </div>
          </div>
          <div class="flex flex-row gap-2 justify-between w-full">
            <input id="title-input" type="text" placeholder="Enter Title" />
            <button id="btn-submit" type="submit" class="fa-solid fa-plus"></button>
          </div>
          <div class="flex flex-col small:flex-row gap-2 justify-between w-full">
            <input id="category-input" type="text" placeholder="Enter Category" />
            <input id="date-input" type="text" placeholder="Enter Date" />
          </div>
          <h1 class="text-lg  text-primary-darkviolet font-bold">Choose Output Colors</h1>
          <div class="flex flex-row gap-4 w-full items-start flex-wrap color-picker">
            <div class="flex flex-row flex-wrap gap-2 items-center">

              <h1 class="text-lg  text-primary-darkviolet"> Text Color</h1>
              <input id="text-picker" type="color" class="fa-solid fa-fill-drip w-28 p-5 rounded-md text-secondary-lightviolet ">
            </div>
            <div class="flex flex-row flex-wrap gap-2 items-center">

              <h1 class="text-lg font- text-primary-darkviolet"> Bg Color</h1>
              <input id="bg-picker" type="color" class="fa-solid fa-fill-drip w-28 p-5 rounded-md text-secondary-lightviolet ">
            </div>
          </div>
          <div class="grid grid-cols-1 w-full lg:w-[90%] h-[32rem] relative">
            <div>
              <textarea class="h-full w-full" id="textarea-input" class="w-full" placeholder="Start writing..."></textarea>
            </div>
            <div class="absolute   right-[20px] bottom-0 m-5 p-2  rounded-full text-primary-darkviolet border-2 border-secondary-lightviolet bg-slate-50 font-extrabold " id="count-container">
              <p class="text-[1rem] font-extrabold">
                <span id="start-count">0</span> / <span id="max-count">0</span>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>

<script src="../js/scriptNav.js"></script>
<script src="../js/scriptNewentry.js"></script>
<script src="../js/scriptAllentry.js"></script>
</body>

</html>