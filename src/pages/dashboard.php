<?php
 include('../static/header.php')
?>
    <section
      class="bg-pages-pattern bg-no-repeat bg-cover bg-center min-h-screen flex flex-col gap-32 md:gap-24"
    >
      <div>
       <?php
        include('../static/navbar.php');
       ?> 
      </div>
        <div
          id="add-bg-cont"
          class="text-black p-5 fixed top-[5.5rem] left-0 flex-col gap-4 justify-around items-start side-nav right-0"
        >
          <div class="hidden"  id="hidden-content">
            <div class="flex flex-col gap-14 items-start">
              <div>
                <input
                  class="border-primary-darkviolet rounded-md border-2 p-2"
                  type="text"
                  placeholder="Search"
                />
                <button
                  class="fa-solid fa-magnifying-glass text-black p-3 relative -left-[2.8rem]"
                ></button>
              </div>
              <h1 class="ms-2 leading-tight tracking-widest">List All</h1>

              <h1 class="ms-2 leading-tight tracking-widest">Info</h1>
            </div>
          </div>

          <div class="btn-toggle" id="show-toggle">
            <button class="fa-solid fa-chevron-right fa-md"></button>
          </div>
        </div>
      </div>
      <div
        class="grid grid-cols-1 gap-6 mb-5 lg:grid-cols-3 gap-x-5 gap-y-3 grid-flow-dense m-2 md:m-10"
      >
        <!-- Reusable component for each item -->
        <div
          class="bg-accent-white p-4 self-center w-[95%] m-auto flex flex-col gap-4 rounded-2xl lg:w-full"
        >
          <div
            class="flex flex-col gap-2 sm:flex-row justify-between flex-wrap"
          >
            <h1 class="text-primary-darkviolet text-4xl lg:text-[2rem]">
              Title Text
            </h1>
            <button
              class="text-white font-normal bg-primary-darkviolet rounded-2xl px-3 py-1 text-sm"
            >
              Relationship
            </button>
          </div>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec
            augue eget justo volutpat commodo. Etiam urna magna Lorem ipsum
            dolor sit amet, consectetur adipiscing elit. Nulla nec augue eget
            justo volutpat commodo. Etiam urna magna
          </p>
        </div>

        <!-- Repeat this component as needed -->
        <div
          class="bg-accent-white p-4 self-center w-[95%] ] m-auto flex flex-col gap-4 rounded-2xl lg:w-full lg:col-span-2 lg:row-span-5 h-full order-first lg:order-none "
        >
          <div class="flex flex-col md:flex-row justify-between">
            <h1 class="text-primary-darkviolet text-2xl md:text-4xl">
              Featured Diary
            </h1>
            <button
              class="text-white font-normal bg-primary-darkviolet rounded-sm md:rounded-2xl px-3 py-1 text-sm"
            >
              Anniversary | Beng Beng
            </button>
          </div>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis aut
            dolor, iusto blanditiis qui veniam omnis voluptates quisquam quae
            repudiandae, est labore. Provident repellendus libero porro, sequi
            asperiores officia. Assumenda impedit id nostrum laboriosam.
            Exercitationem architecto explicabo quod reiciendis iusto id
            doloremque soluta repellat ratione ipsum harum illo quaerat quis
            temporibus amet corrupti, debitis laudantium animi dolore quos nulla
            laborum rem minima eos. Porro reprehenderit laborum dolorum ab
            nesciunt exercitationem ex, quaerat, autem at quod eos dignissimos.
            Quaerat consequuntur nihil incidunt itaque sunt autem beatae ullam
            aliquid, voluptas, suscipit unde quos sapiente, aspernatur quae quas
            neque cumque rem quis voluptatibus?
          </p>
          <div
            class="grid grid-cols-1 md:grid-cols-3 grid-flow-dense gap-y-5 gap-x-6"
          >
            <div
              class="flex flex-col md:flex-col items-start md:items-center justify-between w-full gap-6 small:flex-row"
            >
              <img
                class="rounded-full w-20 lg:w-52 self-center"
                src="../images/Doja_Cat_-_Paint_the_Town_Red.png"
                alt=""
              />
              <p
                class="font-normal text-center small:text-start md:text-center text-sm lg:text-[1rem]"
              >
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Possimus, eos. Consectetur nemo nisi assumenda mollitia in quo
                voluptates error labore.
              </p>
            </div>
            <div
              class="flex flex-col small:flex-row md:flex-col items-start text-center small:text-start md:items-center justify-between w-full md:text-center gap-6"
            >
              <img
                class="rounded-full w-20 lg:w-52 self-center"
                src="../images/music-image-1.jpg"
                alt=""
              />
              <p
                class="font-normal text-center small:text-start md:text-center text-sm lg:text-[1rem]"
              >
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Possimus, eos. Consectetur nemo nisi assumenda mollitia in quo
                voluptates error labore.
              </p>
            </div>
            <div
              class="flex flex-col small:flex-row md:flex-col items-start text-start md:items-center justify-between w-full md:text-center gap-6"
            >
              <img
                class="rounded-full w-20 lg:w-52 self-center"
                src="../images/artworks-000016783437-9xp37m-t500x500.jpg"
                alt=""
              />
              <p
                class="font-normal text-center small:text-start md:text-center text-sm lg:text-[1rem]"
              >
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Possimus, eos. Consectetur nemo nisi assumenda mollitia in quo
                voluptates error labore.
              </p>
            </div>
          </div>
        </div>

        <!-- Repeat this component as needed -->
        <div
          class="bg-accent-white p-4 self-center w-[95%] lg:w-full m-auto flex flex-col gap-4 rounded-2xl"
        >
          <div
            class="flex flex-col gap-2 sm:flex-row justify-between flex-wrap"
          >
            <h1 class="text-primary-darkviolet text-4xl lg:text-[2rem]">
              Title Text
            </h1>
            <button
              class="text-white font-normal bg-primary-darkviolet rounded-2xl px-3 py-1 text-sm"
            >
              Relationship
            </button>
          </div>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec
            augue eget justo volutpat commodo. Etiam urna magna Lorem ipsum
            dolor sit amet, consectetur adipiscing elit. Nulla nec augue eget
            justo volutpat commodo. Etiam urna magnas
          </p>
        </div>
        <!-- Repeat this component as needed -->
        <div
          class="bg-accent-white p-4 self-center w-[95%] lg:w-full m-auto flex flex-col gap-4 rounded-2xl"
        >
          <div
            class="flex flex-col gap-2 sm:flex-row justify-between flex-wrap"
          >
            <h1 class="text-primary-darkviolet text-4xl lg:text-[2rem]">
              Title Text
            </h1>
            <button
              class="text-white font-normal bg-primary-darkviolet rounded-2xl px-3 py-1 text-sm"
            >
              Relationship
            </button>
          </div>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec
            augue eget justo volutpat commodo. Etiam urna magna Lorem ipsum
            dolor sit amet, consectetur adipiscing elit. Nulla nec augue eget
            justo volutpat commodo. Etiam urna magnas
          </p>
        </div>
        <!-- Repeat this component as needed -->
        <div
          class="bg-accent-white p-4 self-center w-[95%] lg:w-full m-auto flex flex-col gap-4 rounded-2xl"
        >
          <div
            class="flex flex-col gap-2 sm:flex-row justify-between flex-wrap"
          >
            <h1 class="text-primary-darkviolet text-4xl lg:text-[2rem]">
              Title Text
            </h1>
            <button
              class="text-white font-normal bg-primary-darkviolet rounded-2xl px-3 py-1 text-sm"
            >
              Relationship
            </button>
          </div>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec
            augue eget justo volutpat commodo. Etiam urna magna Lorem ipsum
            dolor sit amet, consectetur adipiscing elit. Nulla nec augue eget
            justo volutpat commodo. Etiam urna magnas
          </p>
        </div>
        <!-- Repeat this component as needed -->
        <div
          class="bg-accent-white p-4 self-center w-[95%] m-auto flex flex-col gap-4 rounded-2xl lg:w-full"
        >
          <div
            class="flex flex-col gap-2 sm:flex-row justify-between flex-wrap"
          >
            <h1 class="text-primary-darkviolet text-4xl lg:text-[2rem]">
              Title Text
            </h1>
            <button
              class="text-white font-normal bg-primary-darkviolet rounded-2xl px-3 py-1 text-sm"
            >
              Relationship
            </button>
          </div>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec
            augue eget justo volutpat commodo. Etiam urna magna Lorem ipsum
            dolor sit amet, consectetur adipiscing elit. Nulla nec augue eget
            justo volutpat commodo. Etiam urna magnas
          </p>
        </div>
      </div>
    </section>
    <script  src="../js/scriptDashboard.js"></script>
    <script src="../js/scriptNav.js"></script>
  </body>
</html>
