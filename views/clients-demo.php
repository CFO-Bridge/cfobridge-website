<style>
    /* Combo list dropdown styling */
    #comboList {
        position: absolute;
        top: calc(100% + 2px);
        left: 0;
        width: 100%;
        border: 1px solid rgba(0, 0, 0, 0.1);
        background: #fff;
        border-radius: 5px;
        max-height: 200px;
        overflow-y: auto;
        display: none;
        z-index: 100;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    }

    #comboList li {
        padding: 12px 20px;
        cursor: pointer;
        color: var(--dark);
    }

    #comboList li:hover {
        background-color: #f7f7f7;
    }

    /* Show on input */
    #comboList.show {
        display: block;
    }

    /* Positioning the search icon */
    .combo-search .select-group>img {
        width: 16px;
        right: 15px;
        pointer-events: none;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
    }

    /* Hide list items */
    .hidden {
        display: none !important;
    }

    .clients-sec {
        padding-top: 0;
    }
    
    
.clients-grid {
  position: relative;
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(130px, 1fr));
  margin-top: 3em;
  row-gap: 35px;
  -moz-column-gap: 35px;
       column-gap: 35px;
}

.clt {
  width: 100%;
  padding-top: 100%;
  position: relative;
  border-radius: 0;
  overflow: hidden;
  transition: 0.2s cubic-bezier(0.445, 0.05, 0.55, 0.95);
  background-color: #f8f8f8;
  display: block;
  border: 1px solid rgba(0,0,0,0.08);
}
</style>

<header class="inner-header team-banner sec">
    <img src="assets/images/team-bg.jpg" alt="">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-12">
                <div class="sec-head center ">
                    <h1>
                        Our <span>Clients</span>
                    </h1>
                </div>
            </div>
        </div>
    </div>
</header>


<section class="sec clients-sec">
    <div class="container">
        <div class="row">
            <div class="col-3 mt-4">
                <div class="form-group combo-search">
                    <div class="inp-group select-group" style="position: relative;">
                        <input type="text" id="comboInput" placeholder="Search category..." />
                        <img src="assets/images/search.svg" alt="Search Icon" style="width: 16px;" />
                        <ul id="comboList">
                            <?php
                            if (!empty($category)) {
                                echo "<li class='combo-cat' data-id=''>All</li>";
                                foreach ($category as $row) {
                                    echo "<li class='combo-cat' data-id='" . $row['id'] . "'>" . $row['name'] . "</li>";
                                }
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-12">

                <div class="clients-grid">

                </div>
            </div>
        </div>
    </div>
</section>
<script>
    const input = document.getElementById('comboInput');
    const list = document.getElementById('comboList');
    const listItems = list.querySelectorAll('li');

    input.addEventListener('input', () => {
        const filter = input.value.trim().toLowerCase();
        let anyVisible = false;

        listItems.forEach(item => {
            const text = item.textContent.trim().toLowerCase();
            if (filter === '' || text.startsWith(filter)) {
                item.classList.remove('hidden');
                anyVisible = true;
            } else {
                item.classList.add('hidden');
            }
        });

        list.classList.toggle('show', filter !== '' && anyVisible);
    });

    input.addEventListener('focus', () => {
        list.classList.add('show');
    });

    input.addEventListener('blur', () => {
        setTimeout(() => list.classList.remove('show'), 200);
    });

    listItems.forEach(item => {
        item.addEventListener('click', () => {
            input.value = item.textContent;
            list.classList.remove('show');
            const id = item.dataset.id;
            loadClients(id);
        });
    });

    // AJAX logic shared for both tag click and combo item selection
    function loadClients(id) {
        $(".clients-grid").fadeOut();
        $.ajax({
            type: "post",
            url: site_url + "home/getclientslogos",
            data: { id: id },
            dataType: "json",
            success: function (res) {
                $(".client-cat").removeClass('active');
                $(".combo-cat").removeClass('active');
                var temp = "";
                if (res.length) {
                    res.forEach(e => {
                        temp += `<a href="${e.link}" target="_blank" class="clt">
                        <img src="${site_url + 'uploads/images/' + e.image}" alt="${e.alt_text || e.image.split('.').slice(0, -1).join('.')}">
                    </a>`;
                    });
                } else {
                    temp = 'Not Found';
                }
                $(".clients-grid").html(temp).fadeIn();
                $(`.combo-cat[data-id='${id}'], .client-cat[data-id='${id}']`).addClass('active');
            }
        });
    }

    // Category tags trigger same filtering
    $(".client-cat").on("click", function () {
        let id = $(this).data("id");
        loadClients(id);
    });

    $(document).ready(function () {
        loadClients('');
    });
</script>