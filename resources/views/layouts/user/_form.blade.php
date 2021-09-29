<div class="input-field">
<label>ID:</label>
   <input type="text" name="id" class="form-control" value="{{isset($user['id']) ? $user['id'] : ''}}" disabled="disabled">
</div>
<div class="input-field">
<label>Nome:</label>
   <input type="text" name="nome" class="form-control" value="{{isset($user['name']) ? $user['name'] : ''}}" required="required">
</div>
<div class="input-field">
<label>Telefone:</label>
   <input type="text" id="telefone" name="telefone" class="form-control" value="{{isset($user['phone']) ? $user['phone'] : ''}}" required="required">
</div>
<div class="input-field">
<label>E-mail:</label>
   <input type="email" name="email" class="form-control" value="{{isset($user['email']) ? $user['email'] : ''}}" required="required">
</div>
<div class="input-field">
<label>CPF:</label>
   <input type="text" id="cpf" name="cpf" class="form-control" value="{{isset($user['cpf']) ? $user['cpf'] : ''}}" required="required">
</div>
<div class="input-field">
<label>Mensagem:</label>
   <textarea name="mensagem" class="form-control">{{isset($user['message']) ? $user['message'] : ''}}</textarea>
</div>
<div class="input-field col-md-4" style="margin-left: -15px;">
<label>Data de Nascimento:</label>
   <input type="date" name="data_nasc" class="form-control" value="{{isset($user['birthday']) ? $user['birthday'] : ''}}">
</div>
