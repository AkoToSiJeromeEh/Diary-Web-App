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
        <div class="grid grid-cols-1 gap-4 mb-5 md:grid-cols-3 p-5">
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
        </div>
      </div>
    </section>

    <script src="../js/scriptNav.js"></script>
  </body>
</html>
