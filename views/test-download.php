<header class="inner-banner sec"
    style="background: url(<?= base_url() ?>assets/images/news-banner.jpg) center/cover no-repeat !important;">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-8 col-12">
                <div class="sec-head center white">
                    <h1>
                        Unlocking Strategic Wisdom
                    </h1>
                    <p class="para">
                        Dive into Our Latest Business Insights
                    </p>
                </div>
            </div>
        </div>
    </div>
</header>




<section class="bll-sec sec">
    <div class="container">
        <div class="row">





            <div class="col-lg-3 col-sm-12 col-xs-12" >
                
                <div style="position: sticky; top: 20px; z-index: 2;">

                <div class="form-group">
                    <label for="" class="label-text">Filter By Author</label>
                    <div class="inp-group">
                        <div class="select-group">
                            <select id="teams">
                                <option value="">Select Author</option>
                                <?php if (!empty($teams)) {
                                    foreach ($teams as $tm) {
                                        echo "<option value=" . $tm['id'] . ">" . $tm['name'] . "</option>";
                                    }
                                } ?>
                            </select>
                            <img src="<?= base_url() ?>assets/images/drop.svg" alt="">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="label-text">Filter By Topic</label>
                    <div class="inp-group">
                        <div class="select-group">
                            <select id="topics">
                                <option value="">Select Topic</option>
                                <?php if (!empty($topics)) {
                                    foreach ($topics as $tp) {
                                        echo "<option value=" . $tp['id'] . ">" . $tp['name'] . "</option>";
                                    }
                                } ?>
                            </select>
                            <img src="<?= base_url() ?>assets/images/drop.svg" alt="">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="label-text">Filter By Year & Month</label>
                    <div class="inp-group">
                        <input type="month" id="monthPicker" name="month">
                    </div>
                </div>
                
                </div>
            </div>

            <div class="col-lg-9 col-sm-12 col-xs-12">

                <div class="bll-grid mt-20 down-docs">


                </div>
            </div>
        </div>
    </div>
</section>
<?php
// Assuming $row['created_at'] contains the date from the database
$created_at = $row['created_at'];
$year_only = date('Y', strtotime($created_at));

?>
<script>
    $(document).ready(function () {

        $("#teams").on("change", function () {
            let authorId = $(this).val();
            getdocs(authorId);
        }).trigger("change");

        $("#topics").on("change", function () {
            let topicId = $(this).val();
            getdocsT(topicId);
        }).trigger("change");

        filterByMonthYear();                
        $("#monthPicker").on("change", filterByMonthYear);

    });

    function getdocs(authorId) {
        $.ajax({
            type: "POST",
            dataType: "JSON",
            url: site_url + 'home/getdownloadslistTest',
            data: {
                tid: authorId
            },
            success: function (res) {
                let temp = "";
                if (res.length > 0) {
                    res.forEach(e => {
                        console.log(e);
                        // Get file extension from the file name
                        const fileExtension = e.file.split('.').pop().toLowerCase();

                        // Map file extensions to corresponding image file names
                        const fileExtensionImages = {
                            'pdf': 'pdf-icon.jpg',
                            'excel': 'excel-icon.jpg',
                            'doc': 'doc-icon.jpg'
                        };

                        // Get the image file name based on the file extension
                        const imageFileName = fileExtensionImages[fileExtension] || 'default-icon.jpg';

                        temp += ` <a href="${site_url + 'download-page/' + e.slug}" target="blank" class="bll-card">
                        <div class="im">
                            <img src="<?= base_url() ?>uploads/images/${e.image}" alt="">
                        </div>
                        <div class="det">
                            <h3>
                               ${e.title}
                            </h3>
                            <p class="para">
                                ${e.short_description}
                            </p>
                            <button class="main-btn link-blue-btn">
                                <span>Learn More</span>
                                <img src="<?= base_url() ?>assets/images/blue-arrow.svg" alt="">
                            </button>
                        </div>
                    </a>`;
                    });
                } else {
                    temp += `No documents found!`;
                }
                $(".down-docs").html(temp);
            }
        });
    }

    function getdocsT(topicid) {
        $.ajax({
            type: "POST",
            dataType: "JSON",
            url: site_url + 'home/getdownloadslistT',
            data: {
                tid: topicid
            },
            success: function (res) {
                let temp = "";
                if (res.length > 0) {
                    res.forEach(e => {
                        console.log(e);
                        // Get file extension from the file name
                        const fileExtension = e.file.split('.').pop().toLowerCase();

                        // Map file extensions to corresponding image file names
                        const fileExtensionImages = {
                            'pdf': 'pdf-icon.jpg',
                            'excel': 'excel-icon.jpg',
                            'doc': 'doc-icon.jpg'
                        };

                        // Get the image file name based on the file extension
                        const imageFileName = fileExtensionImages[fileExtension] || 'default-icon.jpg';

                        temp += ` <a href="${site_url + 'download-page/' + e.slug}" target="blank" class="bll-card">
                        <div class="im">
                            <img src="<?= base_url() ?>uploads/images/${e.image}" alt="">
                        </div>
                        <div class="det">
                            <h3>
                               ${e.title}
                            </h3>
                            <p class="para">
                                ${e.short_description}
                            </p>
                            <button class="main-btn link-blue-btn">
                                <span>Learn More</span>
                                <img src="<?= base_url() ?>assets/images/blue-arrow.svg" alt="">
                            </button>
                        </div>
                    </a>`;
                    });
                } else {
                    temp += `No documents found!`;
                }
                $(".down-docs").html(temp);
            }
        });
    }

    function filterByMonthYear() {
    const value = $("#monthPicker").val();  
    let year  = "";
    let month = "";

    if (value) {
        [year, month] = value.split("-");   
    }

    $.ajax({
        type: "POST",
        dataType: "json",
        url:  site_url + "home/getdownloadslistD",
        data: { year, month },
        success: buildCards,
        error:   () => $(".down-docs").html("Something went wrong …")
    });
}

function buildCards(res) {
    let html = "";

    if (res.length) {
        res.forEach(e => {
            const ext = e.file.split(".").pop().toLowerCase();
            const icons = { pdf: "pdf-icon.jpg", excel: "excel-icon.jpg", doc: "doc-icon.jpg" };
            const icon  = icons[ext] || "default-icon.jpg";

            html += `
            <a href="${site_url}download-page/${e.slug}" target="_blank" class="bll-card">
                <div class="im">
                    <img src="<?= base_url() ?>uploads/images/${e.image}" alt="">
                </div>
                <div class="det">
                    <h3>${e.title}</h3>
                    <p class="para">${e.short_description}</p>
                    <button class="main-btn link-blue-btn">
                        <span>Learn More</span>
                        <img src="<?= base_url() ?>assets/images/blue-arrow.svg" alt="">
                    </button>
                </div>
            </a>`;
        });
    } else {
        html = "No documents found !";
    }
    $(".down-docs").html(html);
}

</script>