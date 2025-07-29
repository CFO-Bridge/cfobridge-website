<header class="inner-banner sec"
    style="background: url(<?=base_url()?>assets/images/download-banner.png) center/cover no-repeat !important;">
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
            <div class="col-lg-3 col-12">
                <div class="form-group">
                    <label for="" class="label-text">Filter By Author</label>
                    <div class="inp-group">
                        <div class="select-group">
                            <select id="teams">
                                <option value="">Select Author</option>
                                <?php if(!empty($teams)){foreach($teams as $tm){echo "<option value=".$tm['id'].">".$tm['name']."</option>";}}?>
                            </select>
                            <img src="<?=base_url()?>assets/images/drop.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">

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

echo $year_only; // Output: 2024
?>
<script>
$(document).ready(function () {
    // Trigger the document fetch when the page loads or the filter changes
    $("#teams").on("change", function () {
        let authorId = $(this).val(); // Get selected author ID
        fetchDocuments(authorId);
    }).trigger("change");
});

// Function to fetch documents based on the selected author ID
function fetchDocuments(authorId) {
    $.ajax({
        type: "POST",
        dataType: "JSON",
        url: site_url + 'home/getdownloadslist',
        data: { tid: authorId },
        success: function (response) {
            let htmlContent = "";

            if (response.length > 0) {
                response.forEach(doc => {
                    // Extract file extension
                    const fileExtension = doc.file.split('.').pop().toLowerCase();

                    // Map file extensions to corresponding icons
                    const fileIcons = {
                        'pdf': 'pdf-icon.jpg',
                        'excel': 'excel-icon.jpg',
                        'doc': 'doc-icon.jpg'
                    };

                    // Get the appropriate icon or fallback to a default
                    const icon = fileIcons[fileExtension] || 'default-icon.jpg';

                    // Format the document card
                    htmlContent += `
                        <a href="${site_url + 'download-inner/' + doc.slug}" target="_blank" class="bll-card">
                            <div class="im">
                                <img src="<?= base_url() ?>assets/images/${icon}" alt="${fileExtension.toUpperCase()} Icon">
                            </div>
                            <div class="det">
                                <h3>${doc.title}</h3>
                                <p class="para">${doc.short_description} (${doc.created_at.split('-')[0]})</p>
                                <button class="main-btn link-blue-btn">
                                    <span>Learn More</span>
                                    <img src="<?= base_url() ?>assets/images/blue-arrow.svg" alt="Arrow Icon">
                                </button>
                            </div>
                        </a>`;
                });
            } else {
                htmlContent = "<p>No documents found!</p>";
            }

            // Update the DOM with the new content
            $(".down-docs").html(htmlContent);
        },
        error: function () {
            $(".down-docs").html("<p>Error fetching documents. Please try again later.</p>");
        }
    });
}

</script>