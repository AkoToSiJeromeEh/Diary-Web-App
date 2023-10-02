<?php
 include('../static/header.php')
?>
    <section
      class="bg-pages-pattern bg-no-repeat bg-cover bg-center min-h-screen flex flex-col gap-5"
    >
    <div>
    <?php
        include('../static/navbar.php');
       ?> 
      </div>

      <div
        class="p-5 flex flex-col items-start md:items-center justify-center lg:flex-row gap-5"
      >
        <form
          class="profile-other-interest p-5 rounded-[20px] flex flex-col gap-8 bg-accent-white items-start w-full lg:w-[40rem] lg:h-[40rem] md:h-full overflow-hidden"
        >
          <div class="flex flex-row gap-2 justify-between w-full">
            <input id="title-input" type="text" placeholder="Enter Title" />
            <button type="submit" class="fa-solid fa-plus"></button>
          </div>
          <div
            class="flex flex-col small:flex-row gap-2 justify-between w-full"
          >
            <input
              id="category-input"
              type="text"
              placeholder="Enter Category"
            />
            <input id="date-input" type="text" placeholder="Enter Date" />
          </div>
          <h1 class="text-lg  text-primary-darkviolet font-bold">Choose Output Colors</h1>
          <div class="flex flex-row gap-4 w-full items-start flex-wrap color-picker">
            <div class="flex flex-row flex-wrap gap-2 items-center">
               
                <h1 class="text-lg  text-primary-darkviolet"> Text Color</h1>
                <input id="text-picker"  type="color" class="fa-solid fa-fill-drip w-28 p-5 rounded-md text-secondary-lightviolet " >
            </div>
            <div class="flex flex-row flex-wrap gap-2 items-center">
               
              <h1 class="text-lg font- text-primary-darkviolet"> Bg Color</h1>
              <input id="bg-picker"  type="color" class="fa-solid fa-fill-drip w-28 p-5 rounded-md text-secondary-lightviolet " >
          </div>
          </div>
          <div class="grid grid-cols-1 w-full lg:w-[90%] h-[32rem]">
            <textarea
              id="textarea-input"
              class="w-full"
              placeholder="Start writing..."
            ></textarea>
          </div>
        </form>

        <div
          id="newEntryCont"
          class="flex flex-col items-center gap-6 w-full lg:w-[30rem] z-30 static lg:relative lg:-left-[5rem] profile-cont  p-5 rounded-[20px] lg:h-[20rem] overflow-y-auto "
        >
          <div class="flex flex-col gap-4 m-5">
            <div
              class="flex flex-col small:flex-row w-full items-start flex-wrap gap-3"
            >
              <div class="flex-1">
                <h1
                  class="text-primary-darkviolet text-lg font-bold"
                  id="title-text"
                >
                  Our First Meet
                </h1>
                <p id="date-text" class="font-normal">Aug 22 2022</p>
              </div>
              <div class="w-full small:w-fit">
                <span
                  id="category-text"
                  class="bg-primary-darkviolet px-4 py-1 text-sm text-white rounded-3xl w-full small:w-fit font-bold"
                >
                  Relationship
                </span>
              </div>
            </div>
            <div>
              <p id="description-text" class="break-all overflow-visible font-normal">
                <span >
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Aliquam, quam, ipsam nemo id corrupti inventore nisi ut eveniet
                repudiandae, saepe blanditiis assumenda sequi quas animi numquam
                quia repellat voluptatem similique!
                </span>
              </p>
            </div>
          </div>
        </div>
      </div>

    </section>


    <script src="../js/scriptNewentry.js"></script>
    <script src="../js/scriptNav.js"></script>
  </body>
</html>
