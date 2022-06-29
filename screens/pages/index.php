<?php
  include('../../functions.inc.php');
  userIsLogged();
  resetCurrentProduct();
  require_once('../../dbconnect.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="../styles/styles.css" />
  <link rel="stylesheet" href="../styles/destaques.css">
  <link rel="shortcut icon" href="../../assets/logo.png" type="image/x-icon" />
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@500&display=swap" rel="stylesheet"> 
  <title>Destaques</title>
  <style>
    main {
      max-width: 1000px;
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    .produtos button {
        text-align: left;
        border: none;
        width: 100%;
    }
  </style>
</head>

<body>
  <!--Barra de navegação-->
  <?php
    include('navbar.html');
    myCartButton();
  ?>
  <main>
    
    <!--Título-->
    <div class="destaques">
      <svg style="margin-right: 22px;" width="20" height="20" viewBox="0 0 20 20" fill="none"
        xmlns="http://www.w3.org/2000/svg">
        <path
          d="M17.7363 6.89649L12.7773 6.17579L10.5605 1.68165C10.4999 1.5586 10.4003 1.45899 10.2773 1.39844C9.9687 1.2461 9.59369 1.37305 9.4394 1.68165L7.2226 6.17579L2.26362 6.89649C2.1269 6.91602 2.0019 6.98048 1.9062 7.07813C1.7905 7.19705 1.72674 7.35704 1.72894 7.52294C1.73113 7.68884 1.7991 7.84708 1.91791 7.9629L5.5058 11.4609L4.65815 16.4004C4.63827 16.5153 4.65099 16.6335 4.69485 16.7415C4.73872 16.8496 4.81198 16.9432 4.90633 17.0117C5.00068 17.0802 5.11234 17.1209 5.22866 17.1292C5.34497 17.1375 5.46128 17.113 5.5644 17.0586L9.99994 14.7266L14.4355 17.0586C14.5566 17.1231 14.6972 17.1445 14.832 17.1211C15.1718 17.0625 15.4003 16.7402 15.3417 16.4004L14.4941 11.4609L18.082 7.9629C18.1796 7.86719 18.2441 7.74219 18.2636 7.60548C18.3164 7.26368 18.0781 6.94727 17.7363 6.89649V6.89649Z"
          fill="black" />
      </svg>
      Destaques
      <svg style="margin-left: 15px;" width="20" height="20" viewBox="0 0 20 20" fill="none"
        xmlns="http://www.w3.org/2000/svg">
        <path
          d="M17.7363 6.89649L12.7773 6.17579L10.5605 1.68165C10.4999 1.5586 10.4003 1.45899 10.2773 1.39844C9.9687 1.2461 9.59369 1.37305 9.4394 1.68165L7.2226 6.17579L2.26362 6.89649C2.1269 6.91602 2.0019 6.98048 1.9062 7.07813C1.7905 7.19705 1.72674 7.35704 1.72894 7.52294C1.73113 7.68884 1.7991 7.84708 1.91791 7.9629L5.5058 11.4609L4.65815 16.4004C4.63827 16.5153 4.65099 16.6335 4.69485 16.7415C4.73872 16.8496 4.81198 16.9432 4.90633 17.0117C5.00068 17.0802 5.11234 17.1209 5.22866 17.1292C5.34497 17.1375 5.46128 17.113 5.5644 17.0586L9.99994 14.7266L14.4355 17.0586C14.5566 17.1231 14.6972 17.1445 14.832 17.1211C15.1718 17.0625 15.4003 16.7402 15.3417 16.4004L14.4941 11.4609L18.082 7.9629C18.1796 7.86719 18.2441 7.74219 18.2636 7.60548C18.3164 7.26368 18.0781 6.94727 17.7363 6.89649V6.89649Z"
          fill="black" />
      </svg>
    </div>
    <div class="linha-destaques"></div>

    <div id="destaques-grid">
      <div class="flex">
        <div class="destaques-tile" style="background-image: url(../../assets/destaques/destaques_1.png); width: 63%; margin-right: 9px;">
          <div class="destaques-wrapper-p" style="justify-content: start;">
            <div class="conteudo-info-first">
              <span>Steak Power</span>
              <p>Com fritas e onion rings</p>
              <div class="score-first">
                <svg class="star" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M14.0759 4.86201L9.86075 4.24941L7.97647 0.429395C7.92501 0.324805 7.84034 0.240137 7.73575 0.188672C7.47345 0.0591797 7.1547 0.16709 7.02354 0.429395L5.13927 4.24941L0.924129 4.86201C0.807918 4.87861 0.701668 4.9334 0.620321 5.01641C0.521976 5.11749 0.467783 5.25348 0.469651 5.39449C0.471519 5.53551 0.529294 5.67002 0.630282 5.76846L3.67999 8.7418L2.95948 12.9403C2.94258 13.038 2.95339 13.1384 2.99068 13.2303C3.02796 13.3221 3.09024 13.4017 3.17043 13.4599C3.25063 13.5182 3.34555 13.5528 3.44441 13.5598C3.54328 13.5669 3.64214 13.5461 3.72979 13.4998L7.50001 11.5176L11.2702 13.4998C11.3732 13.5546 11.4927 13.5729 11.6072 13.5529C11.8961 13.5031 12.0903 13.2292 12.0405 12.9403L11.32 8.7418L14.3697 5.76846C14.4527 5.68711 14.5075 5.58086 14.5241 5.46465C14.569 5.17412 14.3664 4.90518 14.0759 4.86201Z" fill="#D79B00"/>
                </svg>
                <p>4.6</p>
              </div>
            </div>
          </div>
        </div>
        <div class="destaques-tile" style="background-image: url(../../assets/destaques/destaques_2.jpg); width: 37%; margin-left: 9px;">
          <div class="destaques-wrapper">
            <div class="destaques-conteudo">
              <span>Pepsi Lata</span>
              <div class="score">
                <svg class="star" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M14.0759 4.86201L9.86075 4.24941L7.97647 0.429395C7.92501 0.324805 7.84034 0.240137 7.73575 0.188672C7.47345 0.0591797 7.1547 0.16709 7.02354 0.429395L5.13927 4.24941L0.924129 4.86201C0.807918 4.87861 0.701668 4.9334 0.620321 5.01641C0.521976 5.11749 0.467783 5.25348 0.469651 5.39449C0.471519 5.53551 0.529294 5.67002 0.630282 5.76846L3.67999 8.7418L2.95948 12.9403C2.94258 13.038 2.95339 13.1384 2.99068 13.2303C3.02796 13.3221 3.09024 13.4017 3.17043 13.4599C3.25063 13.5182 3.34555 13.5528 3.44441 13.5598C3.54328 13.5669 3.64214 13.5461 3.72979 13.4998L7.50001 11.5176L11.2702 13.4998C11.3732 13.5546 11.4927 13.5729 11.6072 13.5529C11.8961 13.5031 12.0903 13.2292 12.0405 12.9403L11.32 8.7418L14.3697 5.76846C14.4527 5.68711 14.5075 5.58086 14.5241 5.46465C14.569 5.17412 14.3664 4.90518 14.0759 4.86201Z" fill="#D79B00"/>
                </svg>
                <p>4.5</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="destaques-tile" style="background-image: url(../../assets/destaques/destaques_3.jpg);">
        <div class="destaques-wrapper-p">
          <div class="destaques-conteudo-p">
            <span>Hambúrguer Gourmet</span>
            <p>Especial com fritas</p>
            <div class="score">
              <svg class="star" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14.0759 4.86201L9.86075 4.24941L7.97647 0.429395C7.92501 0.324805 7.84034 0.240137 7.73575 0.188672C7.47345 0.0591797 7.1547 0.16709 7.02354 0.429395L5.13927 4.24941L0.924129 4.86201C0.807918 4.87861 0.701668 4.9334 0.620321 5.01641C0.521976 5.11749 0.467783 5.25348 0.469651 5.39449C0.471519 5.53551 0.529294 5.67002 0.630282 5.76846L3.67999 8.7418L2.95948 12.9403C2.94258 13.038 2.95339 13.1384 2.99068 13.2303C3.02796 13.3221 3.09024 13.4017 3.17043 13.4599C3.25063 13.5182 3.34555 13.5528 3.44441 13.5598C3.54328 13.5669 3.64214 13.5461 3.72979 13.4998L7.50001 11.5176L11.2702 13.4998C11.3732 13.5546 11.4927 13.5729 11.6072 13.5529C11.8961 13.5031 12.0903 13.2292 12.0405 12.9403L11.32 8.7418L14.3697 5.76846C14.4527 5.68711 14.5075 5.58086 14.5241 5.46465C14.569 5.17412 14.3664 4.90518 14.0759 4.86201Z" fill="#D79B00"/>
              </svg>
              <p>4.9</p>
            </div>
          </div>
        </div>
      </div>
      <div class="flex">
        <div class="destaques-tile" style="background-image: url(../../assets/destaques/destaques_4.jpg); width: 40%; margin-right: 9px;">
          <div class="destaques-wrapper">
            <div class="destaques-conteudo">
              <span>Drink de Morango</span>
              <div class="score">
                <svg class="star" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M14.0759 4.86201L9.86075 4.24941L7.97647 0.429395C7.92501 0.324805 7.84034 0.240137 7.73575 0.188672C7.47345 0.0591797 7.1547 0.16709 7.02354 0.429395L5.13927 4.24941L0.924129 4.86201C0.807918 4.87861 0.701668 4.9334 0.620321 5.01641C0.521976 5.11749 0.467783 5.25348 0.469651 5.39449C0.471519 5.53551 0.529294 5.67002 0.630282 5.76846L3.67999 8.7418L2.95948 12.9403C2.94258 13.038 2.95339 13.1384 2.99068 13.2303C3.02796 13.3221 3.09024 13.4017 3.17043 13.4599C3.25063 13.5182 3.34555 13.5528 3.44441 13.5598C3.54328 13.5669 3.64214 13.5461 3.72979 13.4998L7.50001 11.5176L11.2702 13.4998C11.3732 13.5546 11.4927 13.5729 11.6072 13.5529C11.8961 13.5031 12.0903 13.2292 12.0405 12.9403L11.32 8.7418L14.3697 5.76846C14.4527 5.68711 14.5075 5.58086 14.5241 5.46465C14.569 5.17412 14.3664 4.90518 14.0759 4.86201Z" fill="#D79B00"/>
                </svg>
                <p>4.7</p>
              </div>
            </div>
          </div>
        </div>
        <div class="destaques-tile" style="background-image: url(../../assets/destaques/destaques_5.png); width: 60%; margin-left: 9px;">
          <div class="destaques-wrapper">
            <div class="destaques-conteudo">
              <span>Hambúrguer Veggie</span>
              <div class="score">
                <svg class="star" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M14.0759 4.86201L9.86075 4.24941L7.97647 0.429395C7.92501 0.324805 7.84034 0.240137 7.73575 0.188672C7.47345 0.0591797 7.1547 0.16709 7.02354 0.429395L5.13927 4.24941L0.924129 4.86201C0.807918 4.87861 0.701668 4.9334 0.620321 5.01641C0.521976 5.11749 0.467783 5.25348 0.469651 5.39449C0.471519 5.53551 0.529294 5.67002 0.630282 5.76846L3.67999 8.7418L2.95948 12.9403C2.94258 13.038 2.95339 13.1384 2.99068 13.2303C3.02796 13.3221 3.09024 13.4017 3.17043 13.4599C3.25063 13.5182 3.34555 13.5528 3.44441 13.5598C3.54328 13.5669 3.64214 13.5461 3.72979 13.4998L7.50001 11.5176L11.2702 13.4998C11.3732 13.5546 11.4927 13.5729 11.6072 13.5529C11.8961 13.5031 12.0903 13.2292 12.0405 12.9403L11.32 8.7418L14.3697 5.76846C14.4527 5.68711 14.5075 5.58086 14.5241 5.46465C14.569 5.17412 14.3664 4.90518 14.0759 4.86201Z" fill="#D79B00"/>
                </svg>
                <p>4.5</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <a href="destaques.php" id="ver-destaques">
      <span>Ver mais destaques</span>
      <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M3.2293 12.7668C3.32366 12.8159 3.42961 12.8384 3.53577 12.8318C3.64193 12.8252 3.7443 12.7899 3.83188 12.7295L11.4152 7.47951C11.4927 7.42582 11.556 7.35416 11.5998 7.27065C11.6435 7.18714 11.6663 7.09427 11.6663 7.00001C11.6663 6.90574 11.6435 6.81287 11.5998 6.72936C11.556 6.64585 11.4927 6.57419 11.4152 6.52051L3.83188 1.27051C3.74446 1.20952 3.64198 1.17371 3.5356 1.16697C3.42923 1.16023 3.32304 1.18282 3.22863 1.23229C3.13421 1.28175 3.05519 1.35619 3.00017 1.44748C2.94515 1.53877 2.91626 1.64342 2.91663 1.75001V12.25C2.91661 12.3565 2.94574 12.4609 3.00086 12.552C3.05597 12.6432 3.13497 12.7174 3.2293 12.7668ZM4.0833 2.86359L10.0584 7.00001L4.0833 11.1364V2.86359Z" fill="black"/>
      </svg>
    </a>
    <div style="height: 1px; background-color: black; width: 90px; margin: 0 auto 0 auto;"></div>

    <form class="cardapio" action="produto.php" method="post">
      
        <section>
            <div class="titulo-cardapio">
                <h2>Lanches</h2>
                <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.32599 13.6807L11.1381 10.7193L4.16245 3.38369C3.41803 4.1699 3 5.23487 3 6.34514C3 7.4554 3.41803 8.52037 4.16245 9.30658L8.32599 13.6807V13.6807ZM20.2999 10.3426C22.1978 8.34385 22.5655 5.47658 21.1048 3.9383C19.654 2.41049 16.9313 2.78721 15.0234 4.78593C13.4435 6.44978 12.9466 8.69964 13.6521 10.3007L3.95378 20.514L5.35487 21.9895L12.2014 14.8004L19.0379 22L20.439 20.5245L13.6025 13.3249L15.0632 11.7867C16.5835 12.5296 18.7199 12.0064 20.2999 10.3426V10.3426Z" fill="black"/>
                </svg>
                </div>

                <div class="produtos">
                    <?php
                        $sql_lanches = "SELECT id_cardapio, nome_produto, descricao_produto, preco_produto FROM `cardapio`
                        WHERE id_categoria = 1 OR id_categoria = 2 OR id_categoria = 3 OR id_categoria = 4
                        ORDER BY id_categoria, nome_produto ASC";
                        $lanches = mysqli_query($conn, $sql_lanches);
                        
                        while ($linha_lanche = mysqli_fetch_assoc($lanches)) {
                            # inserindo cada produto do cardápio e suas informações
                            fillMenu($conn, $linha_lanche);
                        }
                    ?>
            </div>
        </section>

        <section>
            <div class="titulo-cardapio">
            <h2>Bebidas</h2>
            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16.7703 9.84844C16.7816 9.74646 16.7727 9.64325 16.7441 9.54472C16.7155 9.44618 16.6678 9.35424 16.6036 9.27415C16.5395 9.19406 16.4602 9.12739 16.3703 9.07794C16.2804 9.02848 16.1817 8.99722 16.0797 8.98594C15.9777 8.97465 15.8745 8.98356 15.776 9.01216C15.6774 9.04076 15.5855 9.08849 15.5054 9.15262C15.4253 9.21675 15.3586 9.29603 15.3092 9.38593C15.2597 9.47582 15.2285 9.57458 15.2172 9.67656C15.1533 10.2502 14.9095 10.7888 14.5208 11.2154C14.1321 11.6421 13.6183 11.9347 13.0531 12.0516C12.8501 12.0934 12.672 12.2142 12.558 12.3874C12.444 12.5606 12.4035 12.7719 12.4453 12.975C12.4872 13.1781 12.608 13.3562 12.7811 13.4702C12.9543 13.5841 13.1657 13.6247 13.3687 13.5828C14.2574 13.3993 15.0652 12.9391 15.6762 12.2683C16.2873 11.5974 16.6703 10.7503 16.7703 9.84844V9.84844ZM7.03125 1.5625C6.82405 1.5625 6.62534 1.64481 6.47882 1.79132C6.33231 1.93784 6.25 2.13655 6.25 2.34375V10.1562C6.24948 11.6789 6.80484 13.1494 7.81179 14.2916C8.81874 15.4338 10.208 16.169 11.7188 16.3594V21.875H9.375C9.1678 21.875 8.96909 21.9573 8.82257 22.1038C8.67606 22.2503 8.59375 22.449 8.59375 22.6562C8.59375 22.8635 8.67606 23.0622 8.82257 23.2087C8.96909 23.3552 9.1678 23.4375 9.375 23.4375H15.625C15.8322 23.4375 16.0309 23.3552 16.1774 23.2087C16.3239 23.0622 16.4062 22.8635 16.4062 22.6562C16.4062 22.449 16.3239 22.2503 16.1774 22.1038C16.0309 21.9573 15.8322 21.875 15.625 21.875H13.2812V16.3594C14.792 16.169 16.1813 15.4338 17.1882 14.2916C18.1952 13.1494 18.7505 11.6789 18.75 10.1562V2.34375C18.75 2.13655 18.6677 1.93784 18.5212 1.79132C18.3747 1.64481 18.176 1.5625 17.9688 1.5625H7.03125ZM7.8125 6.25V3.125H17.1875V6.25H7.8125ZM7.8125 7.8125H17.1875V10.1562C17.1875 11.3995 16.6936 12.5917 15.8146 13.4708C14.9355 14.3499 13.7432 14.8438 12.5 14.8438C11.2568 14.8438 10.0645 14.3499 9.18544 13.4708C8.30636 12.5917 7.8125 11.3995 7.8125 10.1562V7.8125Z" fill="black"/>
            </svg>
            </div>

            <div class="produtos">
                  <?php
                      $sql_bebidas = "SELECT id_cardapio, nome_produto, descricao_produto, preco_produto FROM `cardapio`
                      WHERE id_categoria = 6 OR id_categoria = 7
                      ORDER BY id_categoria, nome_produto ASC";
                      $bebidas = mysqli_query($conn, $sql_bebidas);
                      
                      while ($linha_bebida = mysqli_fetch_assoc($bebidas)) {
                          # inserindo cada produto do cardápio e suas informações
                          fillMenu($conn, $linha_bebida);
                      }
                  ?>
            </div>
        </section>

        <section>
            <div class="titulo-cardapio">
            <h2>Sobremesas</h2>
            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M3.125 10.1562V8.98437C3.12496 8.47175 3.23702 7.96532 3.45334 7.50057C3.66966 7.03582 3.98499 6.624 4.37725 6.29397C4.7695 5.96394 5.22919 5.72368 5.72409 5.59004C6.21899 5.45639 6.73712 5.4326 7.24219 5.52031C7.57092 4.37984 8.26157 3.37717 9.20997 2.66353C10.1584 1.94989 11.3131 1.56396 12.5 1.56396C13.6869 1.56396 14.8416 1.94989 15.79 2.66353C16.7384 3.37717 17.4291 4.37984 17.7578 5.52031C18.2629 5.4326 18.781 5.45639 19.2759 5.59004C19.7708 5.72368 20.2305 5.96394 20.6228 6.29397C21.015 6.624 21.3303 7.03582 21.5467 7.50057C21.763 7.96532 21.875 8.47175 21.875 8.98437V10.1562C21.8753 12.5076 20.9921 14.7733 19.4003 16.504C17.8085 18.2347 15.6245 19.304 13.2812 19.5V21.875H11.7188V19.5C9.37553 19.304 7.19151 18.2347 5.59973 16.504C4.00795 14.7733 3.12466 12.5076 3.125 10.1562ZM10.1344 9.37344H14.8656C14.7962 8.75431 14.8927 8.12786 15.1453 7.55836C15.3979 6.98887 15.7975 6.49685 16.3031 6.13281C16.1008 5.27619 15.6151 4.51298 14.9249 3.9668C14.2346 3.42062 13.3802 3.12346 12.5 3.12346C11.6198 3.12346 10.7654 3.42062 10.0751 3.9668C9.38489 4.51298 8.89925 5.27619 8.69687 6.13281C9.2027 6.49699 9.60247 6.98926 9.8551 7.55905C10.1077 8.12885 10.2041 8.75563 10.1344 9.375V9.37344ZM8.35469 9.37344C8.41263 9.11623 8.41196 8.84928 8.35275 8.59236C8.29353 8.33544 8.17728 8.09513 8.0126 7.88922C7.84792 7.68332 7.63903 7.51711 7.40141 7.40288C7.16378 7.28865 6.9035 7.22934 6.63984 7.22934C6.37619 7.22934 6.11591 7.28865 5.87828 7.40288C5.64065 7.51711 5.43177 7.68332 5.26709 7.88922C5.10241 8.09513 4.98616 8.33544 4.92694 8.59236C4.86772 8.84928 4.86706 9.11623 4.925 9.37344H8.35469ZM16.6453 9.37344H20.0734C20.1314 9.11623 20.1307 8.84928 20.0715 8.59236C20.0123 8.33544 19.896 8.09513 19.7314 7.88922C19.5667 7.68332 19.3578 7.51711 19.1202 7.40288C18.8825 7.28865 18.6223 7.22934 18.3586 7.22934C18.0949 7.22934 17.8347 7.28865 17.597 7.40288C17.3594 7.51711 17.1505 7.68332 16.9858 7.88922C16.8212 8.09513 16.7049 8.33544 16.6457 8.59236C16.5865 8.84928 16.5858 9.11623 16.6438 9.37344H16.6453ZM12.5 17.9687C14.437 17.9687 16.3049 17.2491 17.7413 15.9496C19.1777 14.6501 20.0801 12.8633 20.2734 10.9359H4.72656C4.91988 12.8633 5.82228 14.6501 7.25867 15.9496C8.69506 17.2491 10.563 17.9687 12.5 17.9687V17.9687ZM9.375 21.8766H15.625C15.8322 21.8766 16.0309 21.9589 16.1774 22.1054C16.3239 22.2519 16.4062 22.4506 16.4062 22.6578C16.4062 22.865 16.3239 23.0637 16.1774 23.2102C16.0309 23.3568 15.8322 23.4391 15.625 23.4391H9.375C9.1678 23.4391 8.96909 23.3568 8.82257 23.2102C8.67606 23.0637 8.59375 22.865 8.59375 22.6578C8.59375 22.4506 8.67606 22.2519 8.82257 22.1054C8.96909 21.9589 9.1678 21.8766 9.375 21.8766V21.8766Z" fill="black"/>
            </svg>
            </div>

            <div class="produtos">
                  <?php
                      $sql_sobremesas = "SELECT id_cardapio, nome_produto, descricao_produto, preco_produto FROM `cardapio`
                      WHERE id_categoria = 5
                      ORDER BY id_categoria, nome_produto ASC";
                      $sobremesa = mysqli_query($conn, $sql_sobremesas);
                      
                      while ($linha_sobremesa = mysqli_fetch_assoc($sobremesa)) {
                          # inserindo cada produto do cardápio e suas informações
                          fillMenu($conn, $linha_sobremesa);
                      }
                  ?>
            </div>
        </section>

    </form>

  </main>

  <script>
    if (screen.width < 540) {
      document.querySelectorAll('.destaques-tile')[3].style.backgroundSize = "200%"
    }
    if (screen.width < 360) {
      document.querySelectorAll('.destaques-tile')[3].style.backgroundSize = "300%"
    }
  </script>
  <script src="../scripts/dinheiro.js"></script>
  <script>
    const produtos = document.querySelectorAll('.produto-wrapper')
    
    for (let index = 0; index < produtos.length; index++) {
        produtos[index].addEventListener('click', () => {
            document.querySelector('form').submit()
        })
    }
  </script>
  <script>
    let navButton = document.querySelectorAll('nav a')
    navButton[0].innerHTML = `<div>
            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M27.6371 14.4536L15.0385 0.443421C14.508 -0.147807 13.4889 -0.147807 12.9583 0.443421L0.359737 14.4536C0.178396 14.6548 0.0593652 14.9043 0.0171174 15.172C-0.0251305 15.4396 0.011225 15.7137 0.121764 15.9611C0.345739 16.4668 0.846883 16.7919 1.39982 16.7919H4.19951V26.599C4.19951 26.9706 4.34699 27.3269 4.60951 27.5897C4.87203 27.8524 5.22809 28 5.59935 28H9.79888C10.1701 28 10.5262 27.8524 10.7887 27.5897C11.0512 27.3269 11.1987 26.9706 11.1987 26.599V20.9949H16.7981V26.599C16.7981 26.9706 16.9456 27.3269 17.2081 27.5897C17.4706 27.8524 17.8267 28 18.1979 28H22.3975C22.7687 28 23.1248 27.8524 23.3873 27.5897C23.6498 27.3269 23.7973 26.9706 23.7973 26.599V16.7919H26.597C26.8681 16.793 27.1337 16.7152 27.3614 16.5679C27.589 16.4206 27.769 16.2102 27.8792 15.9623C27.9895 15.7144 28.0253 15.4398 27.9823 15.1719C27.9393 14.904 27.8194 14.6544 27.6371 14.4536V14.4536Z" fill="black"/>
            </svg>
          </div>
        Início`
    navButton[0].style.color = "black"
  </script>
</body>

</html>