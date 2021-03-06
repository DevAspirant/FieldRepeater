<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <title>Repeter</title>
  </head>
  <body>
    <div class="container">
        <h1> Clinic Schedule </h1>
        <div class="row">
            <div class="form-group col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 child-repeater-table">
                <table class="table table-bordered table-responsive">
                    <thead>
                        <tr>
                        <th>Department Code</th>
                        <th>Clinic Name</th>
                        <th>MPD Name</th>
                        <th>MPD Badge</th>
                        <th>Time</th>
                        <th> Number of Patients</th>
                        <th><a href="javascript:void(0)"class="btn btn-success addRow">+</a></th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" name="department[]" class="form-control"></td>
                            <td><input type="text" name="clinic[]" class="form-control"></td>
                            <td><input type="text" name="Mpd_name[]" class="form-control"></td>
                            <td><input type="number" name="mpd_badge[]" class="form-control"></td>
                            <td><input type="time" name="time[]" class="form-control"></td>
                            <td><input type="number" name="num_patients" class="form-control"></td>
                            <th><a href="javascript:void(0)" class="btn btn-danger deleteRow">-</a></th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <script>
        $('thead').on('click','.addRow',function(){

            var tr =  "<tr>"+
                            "<td><input type='text' name='department[]' class='form-control'></td>"+
                            "<td><input type='text' name='clinic[]' class='form-control'></td>"+
                            "<td><input type='text' name='mpd_name[]' class='form-control'></td>"+
                            "<td><input type='number' name='mpd_badge[]' class='form-control'></td>"+
                            "<td><input type='time' name='time[]' class='form-control'></td>"+
                            "<td><input type='number' name='num_patients' class='form-control'></td>"+
                            "<th><a href='javascript:void(0)' class='btn btn-danger deleteRow'>-</a></th>"+
                        "</tr>";            

        $('tbody').append(tr); // add column
        
        $('tbody').on('click','.deleteRow',function(){
            $(this).parent().parent().remove();
        })

        });
    </script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>