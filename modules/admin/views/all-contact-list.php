<div class="main-panel">
  <div class="content-wrapper">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Contact List</h4>
        <div class="row">
        <div class="col-12 grid-margin">
                    <div class="card">
                    <div class="card-body">
                        <div class="d-md-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center mb-3 mb-md-0">
                            <div class="ml-4">
                            <h6 class="mb-0">Total Enquiries</h6>
                            <h2 class="mb-0" id="totalenquiries"><?=$totalenquiries??0?></h2>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3 mb-md-0">
                            <div class="ml-4">
                            <h6 class="mb-0">Contact Form Enquiries</h6>
                            <h2 class="mb-0" id="contactenquiries"><?=$contactenquiries??0?></h2>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3 mb-md-0">
                            <div class="ml-4">
                            <h6 class="mb-0">Landing Page Enquiries</h6>
                            <h2 class="mb-0" id="landingenquiries"><?=$landingenquiries??0?></h2>
                            </div>
                        </div>
                        
                        <div class="d-flex align-items-center mb-3 mb-md-0">
                            <div class="ml-4">
                            <h6 class="mb-0">Download Form Enquiries</h6>
                            <h2 class="mb-0" id="downloadenquiries"><?=$downloadenquiries??0?></h2>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3 mb-md-0">
                            <div class="ml-4">
                            <h6 class="mb-0">Financial Tool Enquiries</h6>
                            <h2 class="mb-0" id="financialenquiries"><?=$financialenquiries??0?></h2>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3 mb-md-0">
                            <div class="ml-4">
                            <h6 class="mb-0">UTM Source Enquiries</h6>
                            <h2 class="mb-0" id="financialenquiries"><?=$googleenquiries??0?></h2>
                            </div>
                        </div>
                       
                        </div>
                    </div>
                    </div>
                </div>
          <div class="col-12">
          <table border="0" cellspacing="5" cellpadding="5">
        <tbody><tr>
            <td>From:</td>
            <td>
            <div id="datepicker-popup" class="input-group date datepicker">
                        <input type="text" id="min" name="startDate" class="form-control">
                        <span class="input-group-addon input-group-append border-left">
                          <span class="far fa-calendar input-group-text"></span>
                        </span>
                      </div>  
            </td>
           
        
            <td>To:</td>
            <td>
            <div id="datepicker-popup1" class="input-group date datepicker">
                        <input type="text" id="max" name="endDate" class="form-control">
                        <span class="input-group-addon input-group-append border-left">
                          <span class="far fa-calendar input-group-text"></span>
                        </span>
                      </div>  
            </td><td colspan="2"> <button id="filterNowBtn" class="btn btn-primary float-right">Filter Now</button>
</td></tr>

        </tr>
    </tbody></table>
          </div>
          <div class="col-12">
            <div class="table-responsive">
              <table id="empTable" class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Enquiry Type</th>
                    <th>Company</th>
                    <th>Message</th>
                    <th>Page</th>
                    <th>Form Type</th>
                    <th>UTM Source</th>
                    <th>UTM Medium</th>
                    <th>UTM Campaign</th>
                    <th>UTM Term</th>
                    <th>UTM Content</th>
                    <th>Date</th>
                  </tr>
                </thead>
               
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
   

$(document).ready(function(){
  $('#filterNowBtn').on('click', function() {
        
        dataTable.draw();
        getstats();
    });
    // Initialize date picker for minimum date
    $('#datepicker-popup').datepicker({
        dateFormat: 'yy-mm-dd',
        
    });

    // Initialize date picker for maximum date
    $('#datepicker-popup1').datepicker({
        dateFormat: 'yy-mm-dd',
       
    });

    // DataTables initialization
    var dataTable = $('#empTable').DataTable({
        'processing': true,
        'serverSide': true,
        'cache': false,
        'serverMethod': 'POST',
        'ajax': {
            'url': site_url + 'admin/getcontactenquiries',
            'data': function(data) {
                data.startDate = $('#min').val();
                data.endDate = $('#max').val();
            }
        },"initComplete":function( settings, json){
         getstats();
        },
        'columns': [
            { data: 'id' },
            { data: 'name' },
            { data: 'email' },
            { data: 'phone' },
            { data: 'type' },
            { data: 'company' },
            { data: 'message' },
            { data: 'page' },
            { data: 'form' },
            { data: 'utm_source' },
            { data: 'utm_medium' },
            { data: 'utm_campaign' },
            { data: 'utm_term' },
            { data: 'utm_content' },
            { data: 'created_at' }
        ],
        scrollCollapse: true,
        autoWidth: true,
        responsive: false,
        columnDefs: [{
            targets: "datatable-nosort",
            orderable: false,
        }],
        "lengthMenu": [[10, 25, 50, 1000], [10, 25, 50, 1000]],
        "language": {
            "info": "_START_-_END_ of _TOTAL_ entries",
            searchPlaceholder: "Search",
            paginate: {
                next: '<i class="ion-chevron-right"></i>',
                previous: '<i class="ion-chevron-left"></i>'
            }
        },
        dom: 'lBfrtip',
        buttons: ['copy', 'csv', 'pdf', 'print']
    });

   
    // Function to filter data based on selected date range
    function filterData() {
      
        dataTable.draw();
        
    }
    function getstats(){
      $.ajax({
          type: "POST",
          data:{'startDate':$('#min').val(),'endDate':$('#max').val()},
          dataType: "json",
          url: site_url + 'admin/getcontactenquiriesstats',
          success: function (res) { 
            $('#totalenquiries').text(res.totalenquiries);
            $('#contactenquiries').text(res.contactenquiries);
            $('#landingenquiries').text(res.landingenquiries);
            $('#downloadenquiries').text(res.downloadenquiries);
            $('#financialenquiries').text(res.financialenquiries);
          }
           
        })
    }
});
</script>

  