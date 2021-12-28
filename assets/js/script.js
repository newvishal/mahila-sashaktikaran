
// function RequiredValidator(Attribute, FieldName) {
//     if(!Attribute) {
//         alert(`Please Enter Your ${FieldName}`);
//         return false
//     }
//     return true;
// }
console.log("ok");

function validate(FormName) {
    var Name = document.getElementById("Name").value;
    var FatherName = document.getElementById("FatherName").value;
    var MobileNo = document.getElementById("MobileNo").value;
    var DOB = document.getElementById("DOB").value;
    var Education = document.getElementById("Education").value;
    var Address = document.getElementById("Address").value;
    var DistrictId = document.getElementById("DistrictId").value;
    var AssemblyId = document.getElementById("AssemblyId").value;

    if(!Name) {
        alert("Please Enter Your Name");
        return false;
    } else {
        if(! /^[a-zA-Z ]{2,30}$/.test(Name)) {
            alert("Name Not Valid")
            return false
        }
    }
    if(!FatherName) {
        alert("Please Enter Your Father Name");
        return false;
    } else {
        if(! /^[a-zA-Z ]{2,30}$/.test(FatherName)) {
            alert("Father Name Not Valid")
            return false
        }
    }
    if(!DOB) {
        alert("Please Enter Your DOB");
        return false;
    }
    if(!Education) {
        alert("Please Select Your Education");
        return false;
    }


    if(!MobileNo) {
        alert("Please Enter Your Mobile No");
        return false;
    } else {
        if(! /^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[789]\d{9}$/.test(MobileNo)) {
            alert("Mobile Number Not Valid")
            return false
        }
    }

    if(FormName == "laptop") {
        var NoOfFamilyMembers = document.getElementById("NoOfFamilyMembers").value;
        if(!NoOfFamilyMembers) {
            alert("Please Select Number Of Family Member");
            return false;
        }
    }
    
    if(!AssemblyId) {
        alert("Please Select Your Assembly");
        return false;
    }
    if(!DistrictId) {
        alert("Please Select Your District");
        return false;
    }

    if(!Address) {
        alert("Please Enter Your Address");
        return false;
    }
    
    return true
}

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

