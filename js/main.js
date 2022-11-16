$("#add").submit(function(){

    event.preventDefault();

    let coachId = $('#id')[0].value;

    const form = $('#add');

    let serializable = form.serialize();

    serializable = serializable + "&coachId=" + coachId;

    console.log(serializable);

    request = $.ajax({
        url: "handler/addClient.php",
        type: "post",
        data: serializable
    });

    request.done(function (response, textStatus, jqXHR) {

        if (response === "Success") {
            alert("Client is added")
            append();
        } else {
            alert("Client is not adeed")
        }
    })

    request.fail(function (jqXHR, textStatus, errorThrown) {
        console.log("Error: " + textStatus, errorThrown)
    }) 

})

function append(){

    
    $.get("handler/getLastClient.php", function (data){

       let array = data.split("}")
        array.pop()
        array.forEach(element => {
            element = element + "}"
            let obj = JSON.parse(element)
            console.log(obj)
            $(".tableBody").append(`
                <tr id = '${obj.clientId}'>
			    <th scope="row">${obj.clientId}</th>
			    <td>${obj.name}</td>
			    <td>${obj.lastName}</td>
			    <td>${obj.age}</td>
			    <td>${obj.weight}</td>
			    <td><input class = 'radio' type="radio" name = "izaberi" value=${obj.clientId}></td>
		        </tr>
            `);
        })
    })

}


function search(){

    event.preventDefault();

    let coachId = $('#id')[0].value;

    let text = $('#myInput')[0].value;

    if(text == ""){
        alert("Fill in client's name")
        return
    }

    $('.tableBody').empty()
    $('#myInput').val("")


    $.post("handler/getByName.php", "name=" + text + "&coachId=" + coachId, function (data) {
        let array = data.split("}")
        array.pop()
        array.forEach(element => {
            element = element + "}"
            let obj = JSON.parse(element)

            $('.tableBody').append(`
            <tr id = '${obj.clientId}'>
			    <th scope="row">${obj.clientId}</th>
			    <td>${obj.name}</td>
			    <td>${obj.lastName}</td>
			    <td>${obj.age}</td>
			    <td>${obj.weight}</td>
			    <td><input type="radio" name = "izaberi" value=${obj.clientId}></td>
		    </tr>
        `)

        });
    })

}

function sort(){

    event.preventDefault();

    let coachId = $('#id')[0].value;

    $('.tableBody').empty()


    $.post("handler/sortByName.php", "coachId=" + coachId, function (data) {
        let array = data.split("}")
        array.pop()
        array.forEach(element => {
            element = element + "}"
            let obj = JSON.parse(element)

            $('.tableBody').append(`
            <tr id = '${obj.clientId}'>
			    <th scope="row">${obj.clientId}</th>
			    <td>${obj.name}</td>
			    <td>${obj.lastName}</td>
			    <td>${obj.age}</td>
			    <td>${obj.weight}</td>
			    <td><input class = 'radio' type="radio" name = "izaberi" value=${obj.clientId}></td>
		    </tr>
        `)

        });
    })

}

function getRadioValue() {

    var buttons = $('.tableBody .radio')

    for (i = 0; i < buttons.length; i++) {
        if (buttons[i].checked) {
            return buttons[i].value
        }
    }
    return 0

}