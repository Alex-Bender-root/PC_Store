<?php
include('header.php');
?>

<body>
  <div class="page_game_series">

    <div class="markup_series">
      <div class="selection_hat" id="selection_hat-delivery_head">
        <div class="heading_delivery">
          <h2>Доставка</h2>
          <br>
          <h5>Надежная, быстрая и удобная доставка по всей России и миру</h5>
        </div>
        <div class="description_selection_hat" id="description_selection_hat-delivery_head">
          <img src="img/delivery/delivery1.webp" alt="PC">
        </div>
      </div>
    </div>









    <div class="Selection_parameters">
      <div class="sel_par_desc">
        <h5>Подбор по параметрам</h5>
        <p>Удобный способ выбрать компьютер</p>
      </div>
      <div class="Sel_par_needs">
        <div class="needs_game">
          <h6>По<br>играм</h6>
        </div>
        <div class="needs_Graphics">
          <h6>По<br>видеокарте</h6>
        </div>
        <div class="needs_programs">
          <h6>По<br>программам</h6>
        </div>
        <div class="needs_processors">
          <h6>По<br> процессорам</h6>
        </div>
      </div>

      <div class="needs_desc_total">

        <div class="needs_desc" id="needs__game">
          <div class="needs_desc_p_but">
            <p>Выбери свою любимую игру, а мы расскажем и подскажем какой именно компьютер подойдет для тебя лучше всего! Высокие и ультра настройки графики, оптимальные конфигурации или ультимативные характеристики комплектующих. Все это в разделе подбора ПК по играм.</p>
            <button class="needs_but">
              <p>Подобрать</p>
            </button>
          </div>
          <div class="needs_desc_img">
            <img src="img/main_page/par_needs/game.webp" alt="game">
          </div>
        </div>

        <div class="needs_desc" id="needs__Graphics">
          <div class="needs_desc_p_but">
            <p>Именно от уровня видеокарты зависит игровая производительность ПК. Поэтому в наших сборках присутствуют лучшие продукты от компании NVIDIA новейших поколений - серии RTX 30хх и 40хх. Помимо высокого ФПС они обеспечивают поддержку самых современных технологий, таких как трассировка лучей или адаптивное ИИ-сглаживание DLSS, ускорение рендеринга за счет использования потенциала CUDA-ядер.</p>
            <button class="needs_but">
              <p>Подобрать</p>
            </button>
          </div>
          <div class="needs_desc_img">
            <img src="img/main_page/par_needs/Graphics.webp" alt="Graphics">
          </div>
        </div>

        <div class="needs_desc" id="needs__programs">
          <div class="needs_desc_p_but">
            <p>Подберите программу с помощью которой вы работаете или занимаетесь созданием контента, а мы расскажем и подскажем какой именно компьютер подойдет для ускорения рабочего процесса. Драйвера NVIDIA STUDIO и оптимизация софта, оптимальные конфигурации или максимальная производительность компьютера.</p>
            <button class="needs_but">
              <p>Подобрать</p>
            </button>
          </div>
          <div class="needs_desc_img">
            <img src="img/main_page/par_needs/prog.webp" alt="programs">
          </div>
        </div>

        <div class="needs_desc" id="needs__processors">
          <div class="needs_desc_p_but">
            <p>В наших сборках используются новейшие поколения процессоров от Intel i5, i7, i9 и AMD Ryzen 5, 7, 9. Бюджетных вариантов от обеих компаний будет достаточно для решения любых бытовых задач и раскрытия потенциала среднебюджетных видеочипов. Более продвинутые модели позволят поиграть на ультра-настройках, продемонстрируют высокую производительность в 3D-моделировании, обработке аудио/видео потоков.</p>
            <button class="needs_but">
              <p>Подобрать</p>
            </button>
          </div>
          <div class="needs_desc_img">
            <img src="img/main_page/par_needs/cpu.webp" alt="processors">
          </div>
        </div>

      </div>
    </div>

























    <div class="modal_win" id="open-modal-win">
      <h4>Получить обратную связь</h4>
    </div>

    <div class="form_input" id="form-input-modal">
      <div class="form_input_box">
        <button class="btn_close-form-input-modal" id="close-form-input-modal">
          <img src="img/Modal_Windows/call_request_form/close.svg">
        </button>
        <h2>Получить консультацию</h2>

        <div class="modal_win-content">
          <form>
            <div class="form_win_content">
              <input class="in_com" type="text" id="name" name="name" required placeholder="Имя*">
            </div>
            <div class="form_win_content">
              <input class="in_com" type="number" id="phone" name="phone" required placeholder="Телефон*">
            </div>
            <div class="form_win_content">
              <input class="in_com" type="email" id="email" name="email" required placeholder="Email">
            </div>
            <div class="form_win_content">
              <textarea class="in_com" id="comment" name="comment" rows="4" placeholder="Комментарий"></textarea>
            </div>
            <button class="but_form_win_content" type="submit">Получить консультацию</button>
          </form>
        </div>

      </div>
    </div>

  </div>
</body>
<?php
include('footer.php');
?>