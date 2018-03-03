<h1>TODO List Manager - Task # {id}</h1>
<form class="inputForm" role="form" action="/mtce/submit" method="post">
    {ftask} <p></p>
    {fpriority} <p></p>
    <div class="formButton1">
            {zsubmit}
    </div>
</form>
<div class="attend">
    {error}
</div>


<div class="formButton2">
    <a href="/mtce/cancel"><input type="button" value="Cancel the current edit"/></a>
    <a href="/mtce/delete"><input type="button" value="Delete this todo item"/></a>
</div>

    


