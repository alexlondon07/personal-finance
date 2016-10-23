                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            {!!Form::label('file', 'Photo', array('class' => 'control-label col-md-4'))!!}
                                <div class="col-md-6">
                                <input type="file" name="file" accept="image/*"/>
                            </div>
                        </div>
                        <div class="form-group">
                            {!!Form::label('name', 'Name', array('class' => 'control-label col-md-4'))!!}
                            <div class="col-md-6">
                                {!!Form::text('name',null, array('class' => 'form-control', 'placeholder' => 'Name'))!!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!!Form::label('first_surname', 'First surname', array('class' => 'control-label col-md-4'))!!}
                            <div class="col-md-6">
                                {!!Form::text('first_surname',null, array('class' => 'form-control', 'placeholder' => 'First surname'))!!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!!Form::label('second_surname', 'Second surname', array('class' => 'control-label col-md-4'))!!}
                            <div class="col-md-6">
                                {!!Form::text('second_surname',null, array('class' => 'form-control', 'placeholder' => 'Second surname'))!!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!!Form::label('document', 'Document', array('class' => 'control-label col-md-4'))!!}
                            <div class="col-md-6">
                                {!!Form::text('document',null, array('class' => 'form-control', 'placeholder' => 'Document'))!!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!!Form::label('position', 'Position', array('class' => 'control-label col-md-4'))!!}
                            <div class="col-md-6">
                                {!!Form::text('position',null, array('class' => 'form-control'))!!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!!Form::label('profile', 'Profile', array('class' => 'control-label col-md-4'))!!}
                            <div class="col-md-6">
                                {!!Form::select('profile',array('usuario'=>'Usuario','super_admin'=>'Administrador', 'colaborador'=>'Colaborador'), null, array('class'=>'form-control')) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!!Form::label('enable', 'Enable', array('class' => 'control-label col-md-4'))!!}
                            <div class="col-md-6">
                                {!! Form::select('enable',array('si'=>'si','no'=>'no'), null, array('class'=>'form-control')) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!!Form::label('email', 'Email', array('class' => 'control-label col-md-4'))!!}
                            <div class="col-md-6">
                                {!!Form::text('email',null, array('class' => 'form-control', 'placeholder' => 'Email'))!!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!!Form::label('password', 'Password', array('class' => 'control-label col-md-4'))!!}
                            <div class="col-md-6">
                                    {!!Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password'))!!}
                            </div>
                        </div>
