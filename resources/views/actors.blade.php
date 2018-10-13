<html>
    <head>
        <style>
            body{
                margin: 5%;
                position: center;
            }
            table{
                margin: 2em;
            }
        </style>
    </head>
    <body>
        @if (count($actors)==0)
                <p color='red'> There is no record in the database!</p>
        @else
                <table border="1"> 
                        <tr> 
                                <td> Actor Id </td> 
                                <td> Actor Name </td> 
                                <td> Actor Surname </td>
                                <td> Birthday </td>
                                <td> A / E </td>

                        </tr>
                @foreach ($actors as $actor)
                        <tr> 
                                <td> {{ $actor->actor_id }} </td>
                                <td> {{ $actor->actor_name }} </td>
                                <td> {{ $actor->actor_surname }} </td>
                                <td> {{ $actor->birthday }} </td>
                                <td> {{ $actor->actor_extra }} </td>
                                <td> <input type="button" value="Portfolio" onclick="showPortfolio({{ $actor->actor_id }})"> </td>
                                <td> <input type="button" value="Delete" onclick="deleteActor({{ $actor->actor_id }})"> </td>
                        </tr>
                @endforeach
                </table>
                <table>

                    <td> <input type="button" value="New Actor" onclick="newActor()"> </td>
                </table>
        @endif


        <script>
                function showPortfolio(actorID) {
                        window.location.href="/portfolio/"+actorID;
                }
                function newActor() {
                        window.location.href="/actor/new/";
                }
                function deleteActor(actorID) {
                        window.location.href="/actor/delete/"+actorID;
                }
        </script>
    </body>
</html>