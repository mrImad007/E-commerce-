
<?php 
require (APPROOT.'/view/components/header.php');?>
<body>
<section>
       <!--Nav-->
       <header class="header top-0 shadow-md bg-gray-100 flex items-center justify-between px-8 py-02" >
    <!-- logo -->
    <h1 class="w-3/12">
        <a href="../view/index.php">
         <p class="text-4xl text-[#d946ef]">GLOW<span class="text-[#581c87]">GURU</span></p>
        </a>
    </h1>

    <nav class="nav font-semibold text-lg">
        <ul class="flex items-center">
            <li class="p-4 border-b-2 border-[#d946ef] border-opacity-0 hover:border-opacity-100 hover:text-[#d946ef] duration-200 cursor-pointer active">
              <a href="../view/index.php">Home</a>
            </li>
            <li class="p-4 border-b-2 border-[#d946ef] border-opacity-0 hover:border-opacity-100 hover:text-[#d946ef] duration-200 cursor-pointer">
              <a href="../view/store.php">Store</a>
            </li>
            <li class="p-4 border-b-2 border-[#d946ef] border-opacity-0 hover:border-opacity-100 hover:text-[#d946ef] duration-200 cursor-pointer">
              <a href="../controller/check.control.php">Dashboard</a>
            </li>
            <li class="p-4 border-b-2 border-[#d946ef] border-opacity-0 hover:border-opacity-100 hover:text-[#d946ef] duration-200 cursor-pointer">
              <a href="../view/contact.php">Contact</a>
            </li>
        </ul>
    </nav>

    <!-- buttons --->
    <div class="w-3/12 flex justify-end">
        <a href="">
            <svg class="h-8 p-1 hover:text-[#d946ef] duration-200" aria-hidden="true" focusable="false" data-prefix="far" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-search fa-w-16 fa-9x"><path fill="currentColor" d="M508.5 468.9L387.1 347.5c-2.3-2.3-5.3-3.5-8.5-3.5h-13.2c31.5-36.5 50.6-84 50.6-136C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c52 0 99.5-19.1 136-50.6v13.2c0 3.2 1.3 6.2 3.5 8.5l121.4 121.4c4.7 4.7 12.3 4.7 17 0l22.6-22.6c4.7-4.7 4.7-12.3 0-17zM208 368c-88.4 0-160-71.6-160-160S119.6 48 208 48s160 71.6 160 160-71.6 160-160 160z" class=""></path></svg>
        </a>
        <a href="">
            <svg class="h-8 p-1 hover:text-[#d946ef] duration-200" aria-hidden="true" focusable="false" data-prefix="far" data-icon="shopping-cart" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-shopping-cart fa-w-18 fa-7x"><path fill="currentColor" d="M551.991 64H144.28l-8.726-44.608C133.35 8.128 123.478 0 112 0H12C5.373 0 0 5.373 0 12v24c0 6.627 5.373 12 12 12h80.24l69.594 355.701C150.796 415.201 144 430.802 144 448c0 35.346 28.654 64 64 64s64-28.654 64-64a63.681 63.681 0 0 0-8.583-32h145.167a63.681 63.681 0 0 0-8.583 32c0 35.346 28.654 64 64 64 35.346 0 64-28.654 64-64 0-18.136-7.556-34.496-19.676-46.142l1.035-4.757c3.254-14.96-8.142-29.101-23.452-29.101H203.76l-9.39-48h312.405c11.29 0 21.054-7.869 23.452-18.902l45.216-208C578.695 78.139 567.299 64 551.991 64zM208 472c-13.234 0-24-10.766-24-24s10.766-24 24-24 24 10.766 24 24-10.766 24-24 24zm256 0c-13.234 0-24-10.766-24-24s10.766-24 24-24 24 10.766 24 24-10.766 24-24 24zm23.438-200H184.98l-31.31-160h368.548l-34.78 160z" class=""></path></svg>
        </a>
    </div>
</header><br>
<!-- end navigation -->
<!-- start form -->

<h1 class="font-medium text-3xl text-center">Add a new product</h1><br>
<div class="p-8 rounded border border-gray-200">
    <h3 class="text-center">Keep manipulating your database when ever you want to ;)</h3>
  <form class="moreForms" action="<?= URLROOT?>ElectroSite/Admin/update" method="post">
    <div class="mt-8 grid lg:grid-cols-2 gap-4">
      <div>
        <label for="name" class="text-sm text-gray-700 block mb-1 font-medium">Product image</label>
        <input type="file" name="image" id="name" accept=".jpg, .png, .jpeg" class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full" placeholder="URL" value="<?= $data['image']?>" />
      </div>

      <div>
        <label for="email" class="text-sm text-gray-700 block mb-1 font-medium">Product label</label>
        <input type="text" name="label" id="email" class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full" placeholder="product label" value="<?= $data['label']?>" />
      </div>

      <div>
        <label for="email" class="text-sm text-gray-700 block mb-1 font-medium">Product buy price</label>
        <input type="text" name="buyP" id="email" class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full" placeholder="product name" value="<?= $data['buyP']?>" />
      </div>

      <div>
        <label for="email" class="text-sm text-gray-700 block mb-1 font-medium">Product sell price</label>
        <input type="text" name="sellP" id="email" class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full" placeholder="product name" value="<?= $data['sellP']?>"/>
      </div>

      <div>
        <label for="email" class="text-sm text-gray-700 block mb-1 font-medium">Product final price</label>
        <input type="text" name="finalP" id="email" class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full" placeholder="product name" value="<?= $data['finalP']?>"/>
      </div>

      <div>
        <label for="email" class="text-sm text-gray-700 block mb-1 font-medium">Product description</label>
        <input type="text" name="desc" id="email" class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full" placeholder="product name" value="<?= $data['description']?>" />
      </div>


      <div>
        <label for="brithday" class="text-sm text-gray-700 block mb-1 font-medium">Product code</label>
        <input type="text" name="code" id="brithday" class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full" placeholder="exemple (Fragerance)" value="<?= $data['codeBarre']?>"/>
      </div>
    </div>

    <label for="category" style="text-align: end;">Choose the category :</label>
      <select name="category">
          <!-- start loop  -->
        <?php foreach ($data2['category'] as $category): ?>
        <option value="<?= $category['name']?>"><?= $category['name']?></option>
        <?php endforeach;?>
            <!-- end loop  -->
      </select>

    <div class="space-x-4 mt-8 flex justify-center">
        <input type="hidden" name="productId" value="<?= $data['id']?>">
      <button type="submit" class="py-2 px-4 bg-blue-500 text-white rounded hover:bg-blue-600 active:bg-blue-700 disabled:opacity-50">Save</button>
    </div>


  </form><br>
  <a href="<?= URLROOT?>ElectroSite/Admin/show" class="flex justify-center">
        <button class="py-2 px-4 bg-white border border-gray-200 text-gray-600 rounded hover:bg-gray-100 active:bg-gray-200 disabled:opacity-50 ">Cancel</button>
    </a>
  
</div>
<!-- end form -->
  <!-- footer start -->
  <footer aria-label="Site Footer" class="bg-gray-100">
  <div class="mx-auto max-w-5xl px-4 py-16 sm:px-6 lg:px-8">
    <div class="flex justify-center text-teal-600">
      <p class="text-[#d946ef]">GLOW<span class="text-[#581c87]">GURU</span></p>
    </div>

    <p class="mx-auto mt-6 max-w-md text-center leading-relaxed text-gray-500">
      Cosmetics, Beauty products, fragrances and tools
    </p>

    <nav aria-label="Footer Nav" class="mt-12">
      <ul class="flex flex-wrap justify-center gap-6 md:gap-8 lg:gap-12">
        <li>
          <a class="text-gray-700 transition hover:text-gray-700/75" href="/">
            About
          </a>
        </li>

        <li>
          <a class="text-gray-700 transition hover:text-gray-700/75" href="/">
            Careers
          </a>
        </li>

        <li>
          <a class="text-gray-700 transition hover:text-gray-700/75" href="/">
            History
          </a>
        </li>

        <li>
          <a class="text-gray-700 transition hover:text-gray-700/75" href="/">
            Services
          </a>
        </li>

        <li>
          <a class="text-gray-700 transition hover:text-gray-700/75" href="/">
            Projects
          </a>
        </li>

        <li>
          <a class="text-gray-700 transition hover:text-gray-700/75" href="/">
            Blog
          </a>
        </li>
      </ul>
    </nav>

    <ul class="mt-12 flex justify-center gap-6 md:gap-8">
      <li>
        <a
          href="/"
          rel="noreferrer"
          target="_blank"
          class="text-gray-700 transition hover:text-gray-700/75"
        >
          <span class="sr-only">Facebook</span>
          <svg
            class="h-6 w-6"
            fill="currentColor"
            viewBox="0 0 24 24"
            aria-hidden="true"
          >
            <path
              fill-rule="evenodd"
              d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
              clip-rule="evenodd"
            />
          </svg>
        </a>
      </li>

      <li>
        <a
          href="/"
          rel="noreferrer"
          target="_blank"
          class="text-gray-700 transition hover:text-gray-700/75"
        >
          <span class="sr-only">Instagram</span>
          <svg
            class="h-6 w-6"
            fill="currentColor"
            viewBox="0 0 24 24"
            aria-hidden="true"
          >
            <path
              fill-rule="evenodd"
              d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
              clip-rule="evenodd"
            />
          </svg>
        </a>
      </li>

      <li>
        <a
          href="/"
          rel="noreferrer"
          target="_blank"
          class="text-gray-700 transition hover:text-gray-700/75"
        >
          <span class="sr-only">Twitter</span>
          <svg
            class="h-6 w-6"
            fill="currentColor"
            viewBox="0 0 24 24"
            aria-hidden="true"
          >
            <path
              d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"
            />
          </svg>
        </a>
      </li>

      <li>
        <a
          href="/"
          rel="noreferrer"
          target="_blank"
          class="text-gray-700 transition hover:text-gray-700/75"
        >
          <span class="sr-only">GitHub</span>
          <svg
            class="h-6 w-6"
            fill="currentColor"
            viewBox="0 0 24 24"
            aria-hidden="true"
          >
            <path
              fill-rule="evenodd"
              d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
              clip-rule="evenodd"
            />
          </svg>
        </a>
      </li>

      <li>
        <a
          href="/"
          rel="noreferrer"
          target="_blank"
          class="text-gray-700 transition hover:text-gray-700/75"
        >
          <span class="sr-only">Dribbble</span>
          <svg
            class="h-6 w-6"
            fill="currentColor"
            viewBox="0 0 24 24"
            aria-hidden="true"
          >
            <path
              fill-rule="evenodd"
              d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
              clip-rule="evenodd"
            />
          </svg>
        </a>
      </li>
    </ul>
  </div>
</footer>
</body>
</html>




