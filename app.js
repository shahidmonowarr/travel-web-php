$('#checkbox').click(()=>{
    $('#password').attr('type', $('#checkbox').is(':checked') ? 'text':'password');
    $('#password2').attr('type', $('#checkbox').is(':checked') ? 'text':'password');
});

$('#btn').click(() => {
    const first_name = $('#firstName').val();
    const last_name = $('#lastName').val();
    const email = $('#email').val();
    const password1 = $('#password1').val();
    const password2 = $('#password2').val();

    if(password1 !== password2){
        alert('Password not matched');
    }
    else if(!first_name){
        alert("Please, Enter your First Name");
    }
    else if(!last_name){
        alert("Please, Enter your Last Name");
    }
    else if(!email){
        alert("Please, Enter your Email");
    }
    else if(!password1){
        alert("Please, Enter the Password");
    }
    else if(first_name !== '' && last_name !== '' && password1 !== '' && password1.length ===6 && email !== ''){
        const fullName = first_name + ' ' + last_name;
        const namePass = `
            Name: ${fullName},
            Email: ${email}, 
            Password: ${password1}
        `;

        $('#result').text(namePass);

        alert(`
            Name: ${fullName}
            Email: ${email}
            Password: ${password1}
        `)
    }
})
