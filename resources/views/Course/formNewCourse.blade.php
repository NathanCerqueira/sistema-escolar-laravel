<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Novo Curso</title>
    <link rel="stylesheet" href="{{ asset('css/course/formNewCourse.css') }}">
</head>
<body>
    <fieldset>
        <legend> Criar novo Curso </legend>
        <form name="formNewCourse">
            @csrf
            <label for="title">Nome do Curso:</label><br>
            <input type="text" id="title" name="title" placeholder="Nome do Curso">
            <br>
            <label for="description">Descrição:</label><br>
            <textarea cols="30" rows="5" id="description" name="description" placeholder="Descrição"></textarea><br>
            <input type="submit" name="cadastrar" value="Cadastrar Curso">
        </form>
    </fieldset>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>
{{--<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>--}}
<script>
    $(function () {
        $('form[name="formNewCourse"]').submit(function (event) {
            event.preventDefault();
            $.ajax({
                url: "{{ route('course.create') }}",
                type: "post",
                data: $(this).serialize(),
                dataType: 'json',
                success: function (response){

                    if(response['Success'] === true) {
                        alert('Criado')
                    }
                }
            });
        });
    })
</script>
