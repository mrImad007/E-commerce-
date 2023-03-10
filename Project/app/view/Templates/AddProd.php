
<?php
require (APPROOT.'/view/components/header.php');?>
<body>
<section><br><br><br>
      
<!-- start form -->

<h1 class="font-medium text-3xl text-center">Add a new product</h1><br>
<div class="p-8 rounded border border-gray-200">
    <h3 class="text-center">Keep manipulating your database when ever you want to ;)</h3>
  <form class="moreForms" action="<?= URLROOT?>ElectroSite/Admin/add" method="post" enctype="multipart/form-data">
    <div class="mt-8 grid lg:grid-cols-2 gap-4">
    <div>
        <label for="name" class="text-sm text-gray-700 block mb-1 font-medium">Product image</label>
        <input type="file" name="image" id="name" accept=".jpg, .png, .jpeg" class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full" value="<?= $data['image']?>" />
      </div>

      <div>
        <label for="email" class="text-sm text-gray-700 block mb-1 font-medium">Product label</label>
        <input type="text" name="label" id="email" class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full" placeholder="product name" />
      </div>

      <div>
        <label for="email" class="text-sm text-gray-700 block mb-1 font-medium">Product buy price</label>
        <input type="number" name="buyP" id="email" class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full" placeholder="product buy price" />
      </div>

      <div>
        <label for="email" class="text-sm text-gray-700 block mb-1 font-medium">Product sell price</label>
        <input type="number" name="sellP" id="email" class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full" placeholder="product sell price" />
      </div>

      <div>
        <label for="email" class="text-sm text-gray-700 block mb-1 font-medium">Product final price</label>
        <input type="number" name="finalP" id="email" class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full" placeholder="product final price" />
      </div>

      <div>
        <label for="email" class="text-sm text-gray-700 block mb-1 font-medium">Product description</label>
        <input type="text" name="desc" id="email" class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full" placeholder="product description" />
      </div>

      <div>
        <label for="brithday" class="text-sm text-gray-700 block mb-1 font-medium">Product code</label>
        <input type="number" name="code" id="brithday" class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full" placeholder="Product code" />
      </div>

      <div>
        <label for="brithday" class="text-sm text-gray-700 block mb-1 font-medium">Product color</label>
        <input type="text" name="color" id="brithday" class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full" placeholder="Product color" />
      </div><br>

      <select name="category" class="text-sm text-gray-700 block mb-1 font-medium">
        <?php foreach ($data['category'] as $category): ?>
        <option value="<?= $category['name']?>"><?= $category['name']?></option>
        <?php endforeach;?>
      </select>

    <div class="space-x-4 mt-8 flex justify-center">
      <button type="submit" class="py-2 px-4 bg-blue-500 text-white rounded hover:bg-blue-600 active:bg-blue-700 disabled:opacity-50">Save</button>
    </div>

  </form><br>

  <a href="<?= URLROOT?>ElectroSite/Admin/show" class="flex justify-center">
        <button class="py-2 px-4 bg-white border border-gray-200 text-gray-600 rounded hover:bg-gray-100 active:bg-gray-200 disabled:opacity-50 ">Cancel</button>
    </a>
  
</div>
<!-- end form -->

</body>
</html>




