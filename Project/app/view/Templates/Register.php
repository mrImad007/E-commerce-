<?php require (APPROOT.'/view/components/header.php');?>
<body>
<section>
       <!--Nav-->
<!-- end navigation -->
<!-- start form -->
<br><br><br>
<h1 class="font-medium text-3xl text-center">Join Our Community</h1><br>
<div class="p-8 rounded border border-gray-200">
    <h3 class="text-center">Keep manipulating your Cart when ever you want to ;)</h3>
  <form class="moreForms" action="<?= URLROOT?>ElectroSite/User/register" method="post">
    <div class="mt-8 grid lg:grid-cols-2 gap-4">
      <div>
        <label for="name" class="text-sm text-gray-700 block mb-1 font-medium">Full name</label>
        <input type="text" name="name" id="name" class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full" placeholder="Enter your full name"  />
      </div>

      <div>
        <label for="name" class="text-sm text-gray-700 block mb-1 font-medium">image</label>
        <input type="file" accept=".jpeg" name="image"  />
      </div>

      <div>
        <label for="email" class="text-sm text-gray-700 block mb-1 font-medium">Email</label>
        <input type="email" name="email" id="email" class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full" placeholder="Enter your email" />
      </div>

      <div>
        <label for="password" class="text-sm text-gray-700 block mb-1 font-medium">Password</label>
        <input type="password" name="pwd" id="email" class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full" placeholder="Enter your password" />
      </div>

      <div>
        <label for="adress" class="text-sm text-gray-700 block mb-1 font-medium">Adress</label>
        <input type="text" name="adress" id="email" class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full" placeholder="Enter your adress" />
      </div>

      <div>
        <label for="phone" class="text-sm text-gray-700 block mb-1 font-medium">Phone</label>
        <input type="number" name="tel" id="email" class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full" placeholder="Enter your phone number" />
      </div>

    <div class="space-x-4 mt-8 flex justify-center">
      <button type="submit" class="py-2 px-4 bg-blue-500 text-white rounded hover:bg-blue-600 active:bg-blue-700 disabled:opacity-50">Save</button>
    </div>
  </form><br>
  <a href="<?= URLROOT?>ElectroSite/Admin/show" class="flex justify-center">
        <button class="py-2 px-4 bg-white border border-gray-200 text-gray-600 rounded hover:bg-gray-100 active:bg-gray-200 disabled:opacity-50 ">Cancel</button>
    </a>
  
</div>
<!-- end form -->
  <!-- footer start -->
  

</body>
</html>




