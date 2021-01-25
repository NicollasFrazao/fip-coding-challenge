class Usuarios
{
    constructor()
    {
        this.usuarios = [];
    }

    delete(_rota, _id)
    {
        $.ajax
        (
            {
                url: _rota,
                method: 'post',
                data: {id: _id},
                dataType: "json",
                beforeSend: function() {},
                success: function(response)
                {
                    if ("message" in response)
                    {
                        alert(response.message);
                    }

                    if ("success" in response && response.success)
                    {
                        window.location.reload();
                    }
                },
                error: function(error)
                {
                    console.log(error);
                },
                complete: function() {}
            }
        );
    }
}

var usuarios = new Usuarios();