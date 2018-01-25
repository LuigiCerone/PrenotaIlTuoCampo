{extends file='layout.tpl'}

{block name="css" append}
{/block}


{block name="js" append}
    <script src="public/js/projectScript/profile.js"></script>
{/block}

{block name="content"}
    <div class="container padding">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-center-block">
                <h2>Il mio profilo</h2>
                <br>
                <div class="well well-sm">
                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <img src="public/images/user.png" alt="" class="img-rounded img-responsive"/>
                        </div>
                        <div class="col-sm-6 col-md-8">
                            <h4>Ciao {$user->firstName} &nbsp; {$user->lastName}</h4>
                            {*<small><cite title="San Francisco, USA">San Francisco, USA <i*}
                            {*class="glyphicon glyphicon-map-marker">*}
                            {*</i></cite></small>*}
                            <p> I tuoi dati: </p>
                            <table>
                                <tr>
                                    <td>Nome:</td>
                                    <td>{$user->firstName}</td>
                                </tr>
                                <tr>
                                    <td>Cognome:</td>
                                    <td>{$user->lastName}</td>
                                </tr>
                                <tr>
                                    <td>Sesso:</td>
                                    <td>{$user->gender}</td>
                                </tr>
                                <tr>
                                    <td>Email:</td>
                                    <td>{$user->email}</td>
                                </tr>
                                <tr>
                                    <td>Numero telefono:</td>
                                    <td>{$user->telnumber}</td>
                                </tr>
                                <tr>
                                    <td>Data nascita:</td>
                                    <td>{$user->birthdate}</td>
                                </tr>
                                <tr>
                                    <td>Registrato in data:</td>
                                    <td>{$user->created_at}</td>
                                </tr>
                            </table>
                            <br><br>
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#changePasswordModal">
                                Cambia password
                            </button>
                            <!-- Split button -->
                            {*<div class="btn-group">*}
                            {*<button type="button" class="btn btn-primary">*}
                            {*Social*}
                            {*</button>*}
                            {*<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">*}
                            {*<span class="caret"></span><span class="sr-only">Social</span>*}
                            {*</button>*}
                            {*<ul class="dropdown-menu" role="menu">*}
                            {*<li><a href="#">Twitter</a></li>*}
                            {*<li><a href="https://plus.google.com/+Jquery2dotnet/posts">Google +</a></li>*}
                            {*<li><a href="https://www.facebook.com/jquery2dotnet">Facebook</a></li>*}
                            {*<li class="divider"></li>*}
                            {*<li><a href="#">Github</a></li>*}
                            {*</ul>*}
                            {*</div>*}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal1 -->
    <div class="modal fade" id="changePasswordModal" tabindex="-1" role="dialog">
        <div class="modal-dialog change_pass">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="signin-form profile">
                        <h3 class="agileinfo_sign">Cambia password</h3>
                        <form id="changePassFrom" method="post">
                            <input id="old_password" type="password" name="old_password"
                                   placeholder="Vecchia password" required />
                            <input id="new_password" type="password" name="new_password"
                                   placeholder="Nuova password" required />
                            <span id="error"></span>
                            <input type="submit" value="Cambia passoword" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
{/block}