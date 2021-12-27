
$("select[name='DistrictId']").change(function () {
    var districtID = $(this).val();
    if(districtID) {
        $.ajax({
            url: "getConsitituencyName.php",
            dataType: 'Json',
            data: {'id':districtID},
            success: function(data) {
                $('select[name="AssemblyId"]').empty();
                $.each(data, function(key, value) {
                    $('select[name="AssemblyId"]').append('<option value="'+ key +'">'+ value +'</option>');
                });
            }
        });


    }else{
        $('select[name="AssemblyId"]').empty();
    }
});