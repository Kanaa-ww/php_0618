<?php
session_start();
//※htdocsと同じ階層に「includes」を作成してfuncs.phpを入れましょう！
//include "../../includes/funcs.php";
include "funcs.php";
// sschk();
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>USERデータ登録</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    div {
      padding: 10px;
      font-size: 16px;
    }
  </style>
</head>

<body>

  <!-- Head[Start] -->
  <header>
    <?php echo $_SESSION["name"]; ?>さん　
    <?php include("menu.php"); ?>
  </header>
  <!-- Head[End] -->

  <!-- Main[Start] -->
  <section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto flex flex-wrap items-center">
      <div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
        <!-- <h1 class="title-font font-medium text-3xl text-gray-900">Slow-carb next level shoindcgoitch ethical authentic, poko scenester</h1>
      <p class="leading-relaxed mt-4">Poke slow-carb mixtape knausgaard, typewriter street art gentrify hammock starladder roathse. Craies vegan tousled etsy austin.</p> -->
      </div>
      <div class="lg:w-2/6 md:w-1/2 bg-gray-100 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
        <h2 class="text-gray-900 text-lg font-medium title-font mb-5">ユーザー登録</h2>
        <!-- Head[End] -->

        <!-- Main[Start] -->
        <form method="POST" action="user_insert.php">
          <div class="relative mb-4">
            <label for="name" class="leading-7 text-sm text-gray-600">名前：</label>
            <input type="text" id="name" name="name" class="w-full bg-white rounded border border-gray-300 focus:border-red-500 focus:ring-2 focus:ring-red-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
          <div class="relative mb-4">
            <label for="lid" class="leading-7 text-sm text-gray-600">Login ID</label>
            <input type="text" id="lid" name="lid" class="w-full bg-white rounded border border-gray-300 focus:border-red-500 focus:ring-2 focus:ring-red-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
          <div class="relative mb-4">
            <label for="lpw" class="leading-7 text-sm text-gray-600">Login PW</label>
            <input type="text" id="lpw" name="lpw" class="w-full bg-white rounded border border-gray-300 focus:border-red-500 focus:ring-2 focus:ring-red-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
          <div class="relative mb-4">
            <label for="
                        " class="leading-7 text-sm text-gray-600">管理FLG
              一般<input type="radio" name="kanri_flg" value="0">
              管理者<input type="radio" name="kanri_flg" value="1">
            </label>
            <!-- <input type="text" id="sales" name="sales" class="w-full bg-white rounded border border-gray-300 focus:border-red-500 focus:ring-2 focus:ring-red-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"> -->
          </div>

          <div class="submit">
            <button class="text-white bg-red-500 border-0 py-2 px-8 focus:outline-none hover:bg-red-600 rounded text-lg">送信</button>
          </div>

          <!-- <p class="text-xs text-gray-500 mt-3">Literally you probably haven't heard of them jean shorts.</p> -->
        </form>
        <!-- <div class="date">
                    <a href="select.php" class="text-white bg-red-500 border-0 py-2 px-8 focus:outline-none hover:bg-red-600 rounded text-lg">データ一覧</a>
                
                </div> -->

        <!-- Main[End] -->

      </div>
    </div>
  </section>
</body>

</html>




<!-- <form method="post" action="user_insert.php">
  <div class="jumbotron">
    <fieldset>
      <legend>ユーザー登録</legend>
      <label>名前：<input type="text" name="name"></label><br>
      <label>Login ID：<input type="text" name="lid"></label><br>
      <label>Login PW<input type="text" name="lpw"></label><br>
      <label>管理FLG：
        一般<input type="radio" name="kanri_flg" value="0">　
        管理者<input type="radio" name="kanri_flg" value="1">
      </label>
      <br>
      <!-- <label>退会FLG：<input type="text" name="life_flg"></label><br> -->
      <!-- <input type="submit" value="送信">
    </fieldset>
  </div>
</form> -->
<!-- Main[End] -->


<!-- </body>

</html> --> -->