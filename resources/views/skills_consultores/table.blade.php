<div class="table-responsive">
    <table class="table table-bordered table-striped" id="skillsConsultores-table">
        <thead>
            <tr>
                <th>Consultor</th>
                <th>Skill</th>
                <th>Nivel</th>
                <th>Comentario</th>
            </tr>
        </thead>
        <tbody>
        @foreach($skillsConsultores as $skillsConsultores)
            <tr>
                <td>
                    @foreach($lst_consultores as $consultor)
                        @if ($consultor->con_id == $skillsConsultores->con_id)
                            {{ $consultor->con_nombres }} {{ $consultor->con_apellidos }}
                        @endif
                    @endforeach
                </td>
                <td>
                    @foreach($lst_skills as $skill)
                        @if ($skill->skl_id == $skillsConsultores->skl_id)
                            {{ $skill->skl_nombre }}
                        @endif
                    @endforeach
                </td>
                <td>
                    @foreach($lst_niveles as $nivel)
                        @if ($nivel->nvl_id == $skillsConsultores->nvl_id)
                            {{ $nivel->nvl_nombre }}
                        @endif
                    @endforeach
                </td>
                <td>{{ $skillsConsultores->csk_comentario }}</td>

            </tr>
        @endforeach
        </tbody>
    </table>
</div>
