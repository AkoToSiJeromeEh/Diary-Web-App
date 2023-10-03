<?php
include('../php/checkUser.php');
 include('../static/header.php');
?>
    <section
      class="home-section bg-pages-pattern bg-no-repeat bg-cover bg-center min-h-screen relative flex flex-col gap-5 scroll-m-0 overflow-hidden"
    >
      <div>
       <?php
        include('../static/navbar.php');
       ?> 
      </div>

      <div class="grid grid-flow-dense grid-cols-1 md:grid-cols-2 lg:grid-cols-3 md:gap-8 m-5 gap-4">
        <div class="bg-[#ffffff3c] col-span-1 lg:col-span-2 h-[65vh] rounded-md p-5 text-white overflow-y-auto flex flex-col gap-5 order-last md:order-first">
          <div class="flex flex-col items-start md:flex-row md:items-center gap-2 text-black">
            <h1 class="font-extrabold text-lg  md:text-2xl text-primary-darkviolet">
              Good morning
            </h1>
            <p class="font-extrabold"><?php 
              include('../php/renderUser.php');
            ?> </p>
          </div>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-3 gap-y-3">
              <div class="bg-[#4514583c] p-0 flex flex-row gap-3 items-center rounded-sm">
                <img class="w-10 rounded-sm" src="../images/Couple-image.jpg" alt="">
                <h1 class="text-lg">Aniversary</h1>
              </div>
              <div class="bg-[#4514583c] p-0 flex flex-row gap-3 items-center rounded-sm">
                <img class="w-10 rounded-sm" src="../images/Couple-image.jpg" alt="">
                <h1 class="text-lg">Achivement</h1>
              </div>
              <div class="bg-[#4514583c] p-0 flex flex-row gap-3 items-center rounded-sm">
                <img class="w-10 rounded-sm" src="../images/Couple-image.jpg" alt="">
                <h1 class="text-lg">Bonding</h1>
              </div>
              <div class="bg-[#4514583c] p-0 flex flex-row gap-3 items-center rounded-sm">
                <img class="w-10 rounded-sm" src="../images/Couple-image.jpg" alt="">
                <h1 class="text-lg">Family</h1>
              </div>
          </div>
          <div class="flex flex-col gap-3">
            <div>
              <h1 class="text-primary-darkviolet text-[1rem] md:text-lg">Your Featured Entry</h1>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 grid-flow-dense">
              <div class="bg-white rounded-md p-3 text-black">
               <div class="flex flex-col md:flex-row gap-3 items-center w-full mb-3">
                <h1 class="text-lg">Title Text</h1>
                <p class="font-semibold ms-0 md:ms-auto">Relationship</p>
               </div>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam aperiam officia quidem, quas architecto laudantium. Quo aut voluptates possimus quasi.</p>
              </div>
              <div class="bg-white rounded-md p-3 text-black">
                <div class="flex flex-col md:flex-row gap-3 items-center w-full mb-3">
                 <h1 class="text-lg">Title Text</h1>
                 <p class="font-semibold ms-0 md:ms-auto">Relationship</p>
                </div>
                 <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam aperiam officia quidem, quas architecto laudantium. Quo aut voluptates possimus quasi.</p>
               </div>
               <div class="bg-white rounded-md p-3 text-black">
                <div class="flex flex-col md:flex-row gap-3 items-center w-full mb-3">
                 <h1 class="text-lg">Title Text</h1>
                 <p class="font-semibold ms-0 md:ms-auto">Relationship</p>
                </div>
                 <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam aperiam officia quidem, quas architecto laudantium. Quo aut voluptates possimus quasi.</p>
               </div>
            </div>
            <div>
              <h1 class="text-[1rem] md:text-lg text-primary-darkviolet">Videos Describe US</h1>
            </div>
          </div>
        </div>
        <div class="bg-[#ffffff3c] border-4 p-2 overflow-y-scroll flex flex-col gap-4 h-[65vh] rounded-md order-first md:-order-last">
          <div class="p-5 flex flex-col gap-5 rounded-lg text-white  " id="music-list-container">
            <div  class="grid grid-cols-1 place-content-center place-items-center gap-8 text-center">
             <div>
               <h1 id="musicName" class="text-2xl font-bold">
                 Sparks
               </h1>
               <h2 id="artistName" class="text-md">
                 Cold Play
               </h2>
             </div>
             <img id="music-cover" class="w-52 rounded-xl img-album " src="../images/artworks-000016783437-9xp37m-t500x500.jpg" alt="">
             <p id="musicDescription" class="text-center w-full md:w-5/6 text-sm md:text-[1rem]">
             Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi, culpa. Excepturi obcaecati corporis pariatur voluptatibus, asperiores voluptates repudiandae. Dolor, a.
             </p>
            </div>
        </div>
        <div class="flex flex-col bg-black text-white p-3 rounded-md gap-4">
          <h1 class="text-secondary-lightviolet text-lg">About the Song</h1>
          <p class="leading-6 text-sm md:text-[1rem]">
            I chose this song for the couple because its lyrics capture the essence of their love story, its melody evokes cherished memories, and it symbolizes their journey together beautifully.
          </p>
        </div>
        <div class="flex flex-col bg-black text-white p-3 rounded-md gap-4 mb-2">
          <h1 class="text-secondary-lightviolet text-lg">Next in queue</h1>
         <div class="flex flex-row gap-2">
          <img id="next-queue-img" class=" w-10 small:w-20 rounded-md " src="../images/Doja_Cat_-_Paint_the_Town_Red.png" alt=""> 
         <div class="flex flex-col gap-2">
          <p id="next-queue-p" class=" text-sm small:text-[1rem] font-bold">Paint the town red</p>
          <small id="next-queue-artist" class="font-normal text-sm small:text-[0.8rem]">Doja Cat</small>
         </div>
         </div>
        </div>
      </div>

      <div class="fixed bg-black-hsl small:bg-[#ffffff3c] bottom-0 p-4 left-0 right-0  backdrop-blur-0 small:backdrop-blur-md grid grid-cols-1 
      small:grid-cols-2 md:gap-y-0 md:grid-cols-3 small:place-items-center small:place-content-center  ">
        <div class="flex flex-col  text-white rounded-md gap-4"> 
         <div class="flex flex-row gap-2 w-full small:w-fit mb-5 small:mb-0  ">
          <img id="playing-img" class="w-10 rounded-md hidden small:block " src="../images/artworks-000016783437-9xp37m-t500x500.jpg" alt=""> 
         <div class="flex flex-row gap-4 small:gap-0 small:flex-col w-full small:w-fit  ">
          <p id="playing-music" class="font-bold text-sm ">Sparks</p>
          <small id="playing-artist" class="font-normal ms-auto small:ms-0">Cold Play</small>
         </div>
         </div>
        </div>
        <div class="flex flex-row gap-8 self-center  m-auto small:m-0  ">
          <button id="prev-button">
						<i class="fa-solid fa-backward-step fa-lg" style="color: #ffffff;"></i>
					</button>
					<button id="play-button">
						<i class="fa-solid fa-pause fa-lg" style="color: #ffffff;"></i>
					</button>
					<button id="next-button">
						<i class="fa-solid fa-forward-step fa-lg" style="color: #ffffff;"></i>
					</button>

        </div>
        <div class="col-span-2 md:col-span-1 self-center hidden md:block">
          <p class="text-[0.7rem] md:text-[0.7rem] text-white font-bold ">@ 2023 Darling All Rights Reserved.</p>
        </div>
      </div>
  </div>  
    </section>
    <script src="../js/scriptNav.js"></script>
    <script src="../js/scriptGallery.js"></script>
  </body>
</html>
