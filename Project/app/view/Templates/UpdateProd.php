
<?php 
require (APPROOT.'/view/components/header.php');?>
<body>
<section><br><br><br>
<!-- start form -->

<h1 class="font-medium text-3xl text-center">Update product</h1><br>
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
</body>
</html>




