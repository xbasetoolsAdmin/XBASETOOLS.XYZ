<?php
ob_start();
session_start();
date_default_timezone_set('UTC');
include "../includes/config.php";

if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) {
    header("location: ../");
    exit();
}
$usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
?> 

	<div id="table_wrapper" class="dataTables_wrapper">
        
        <div class="dataTables_length" id="table_length"><label>Show <select name="table_length" aria-controls="table" class=""><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div><div id="table_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="table"></label></div><table id="table" class="display dataTable" style="width:100%" aria-describedby="table_info">
        <thead>
            <tr><th class="sorting sorting_asc" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 51.6875px;">Name</th><th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 68.015625px;">Position</th><th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 47.9375px;">Office</th><th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 26.1875px;">Age</th><th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 32.4375px;">Start date</th><th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 54.0625px;">Salary</th></tr>
        </thead>
        <tbody>
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
        <tr class="odd">
                <td class="sorting_1">Airi Satou</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>33</td>
                <td>2008-11-28</td>
                <td>$162,700</td>
            </tr><tr class="even">
                <td class="sorting_1">Angelica Ramos</td>
                <td>Chief Executive Officer (CEO)</td>
                <td>London</td>
                <td>47</td>
                <td>2009-10-09</td>
                <td>$1,200,000</td>
            </tr><tr class="odd">
                <td class="sorting_1">Ashton Cox</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>66</td>
                <td>2009-01-12</td>
                <td>$86,000</td>
            </tr><tr class="even">
                <td class="sorting_1">Bradley Greer</td>
                <td>Software Engineer</td>
                <td>London</td>
                <td>41</td>
                <td>2012-10-13</td>
                <td>$132,000</td>
            </tr><tr class="odd">
                <td class="sorting_1">Brenden Wagner</td>
                <td>Software Engineer</td>
                <td>San Francisco</td>
                <td>28</td>
                <td>2011-06-07</td>
                <td>$206,850</td>
            </tr><tr class="even">
                <td class="sorting_1">Brielle Williamson</td>
                <td>Integration Specialist</td>
                <td>New York</td>
                <td>61</td>
                <td>2012-12-02</td>
                <td>$372,000</td>
            </tr><tr class="odd">
                <td class="sorting_1">Bruno Nash</td>
                <td>Software Engineer</td>
                <td>London</td>
                <td>38</td>
                <td>2011-05-03</td>
                <td>$163,500</td>
            </tr><tr class="even">
                <td class="sorting_1">Caesar Vance</td>
                <td>Pre-Sales Support</td>
                <td>New York</td>
                <td>21</td>
                <td>2011-12-12</td>
                <td>$106,450</td>
            </tr><tr class="odd">
                <td class="sorting_1">Cara Stevens</td>
                <td>Sales Assistant</td>
                <td>New York</td>
                <td>46</td>
                <td>2011-12-06</td>
                <td>$145,600</td>
            </tr><tr class="even">
                <td class="sorting_1">Cedric Kelly</td>
                <td>Senior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2012-03-29</td>
                <td>$433,060</td>
            </tr></tbody>
        <tfoot>
            <tr><th rowspan="1" colspan="1">Name</th><th rowspan="1" colspan="1">Position</th><th rowspan="1" colspan="1">Office</th><th rowspan="1" colspan="1">Age</th><th rowspan="1" colspan="1">Start date</th><th rowspan="1" colspan="1">Salary</th></tr>
        </tfoot>
    </table><div class="dataTables_info" id="table_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div><div class="dataTables_paginate paging_simple_numbers" id="table_paginate"><a class="paginate_button previous disabled" aria-controls="table" aria-disabled="true" aria-role="link" data-dt-idx="previous" tabindex="-1" id="table_previous">Previous</a><span><a class="paginate_button current" aria-controls="table" aria-role="link" aria-current="page" data-dt-idx="0" tabindex="0">1</a><a class="paginate_button " aria-controls="table" aria-role="link" data-dt-idx="1" tabindex="0">2</a><a class="paginate_button " aria-controls="table" aria-role="link" data-dt-idx="2" tabindex="0">3</a><a class="paginate_button " aria-controls="table" aria-role="link" data-dt-idx="3" tabindex="0">4</a><a class="paginate_button " aria-controls="table" aria-role="link" data-dt-idx="4" tabindex="0">5</a><a class="paginate_button " aria-controls="table" aria-role="link" data-dt-idx="5" tabindex="0">6</a></span><a class="paginate_button next" aria-controls="table" aria-role="link" data-dt-idx="next" tabindex="0" id="table_next">Next</a></div></div>
    
    <script>
    document.addEventListener('DOMContentLoaded', function () {
    let table = new DataTable('#table');
});
    </script>