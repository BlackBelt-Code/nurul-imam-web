<div class="container-fluid">
    <div class="col-md-12">
        <!-- title row -->
        <div class="row">
            <div class="col-12" style="margin-top: 10px;">
                <h4>
                    <i class="fas fa-globe"></i> {{ $rpp[0]->study["study_name"] }}
                    <small class="float-right">Date: {{ $rpp[0]->created_at->format('M d Y') }}</small>
                </h4>
            </div>
            <!-- /.col -->
        </div>
        <!-- info row -->
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered table-hover table-stripped table-responsive">

                    <tr>
                        <th colspan="15" style="text-align: center;">Rpp</th>

                        <th rowspan="2" style="vertical-align : middle;">Detail</th>
                    </tr>
                    <tr>
                        <th style="text-align: center;">Study name</th>
                        <th style="text-align: center;">class name</th>
                        <th style="text-align: center;">semetser</th>
                        <th style="text-align: center;">tahun ajaran</th>
                        <th style="text-align: center;">kompetensi dasar</th>
                        <th style="text-align: center;">tujuan</th>
                        <th style="text-align: center;">materi</th>
                        <th style="text-align: center;">pendekatan</th>
                        <th style="text-align: center;">model</th>
                        <th style="text-align: center;">alat media</th>
                        <th style="text-align: center;">sumber belajar</th>
                        <th style="text-align: center;">penialan</th>
                        <th style="text-align: center;">tanggal</th>
                        <th style="text-align: center;">pertemuan</th>
                        <th style="text-align: center;">alokasi waktu</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="vertical-align : middle;">{{ $rpp[0]->study["study_name"] }}</td>
                            <td style="vertical-align : middle;">{{ $rpp[0]->class["class_name"] }}</td>
                            <td style="vertical-align : middle;">{{ $rpp[0]->semester }}</td>
                            <td style="vertical-align : middle;">{{ $rpp[0]->tahun_ajaran }}</td>
                            <td style="vertical-align : middle;">{{ $rpp[0]->kompentensi_dasat }}</td>
                            <td style="vertical-align : middle;">{{ $rpp[0]->tujuan }}</td>
                            <td style="vertical-align : middle;">{{ $rpp[0]->materi }}</td>
                            <td style="vertical-align : middle;">{{ $rpp[0]->pendekatan }}</td>
                            <td style="vertical-align : middle;">{{ $rpp[0]->model }}</td>
                            <td style="vertical-align : middle;">{{ $rpp[0]->alat_media }}</td>
                            <td style="vertical-align : middle;">{{ $rpp[0]->sumber_belajar }}</td>
                            <td style="vertical-align : middle;">{{ $rpp[0]->penilaian }}</td>
                            <td style="vertical-align : middle;">{{ $rpp[0]->tanggal }}</td>
                            <td style="vertical-align : middle;">{{ $rpp[0]->pertemuan }}</td>
                            <td style="vertical-align : middle;">{{ $rpp[0]->alokasi_waktu }}</td>
                            <td>

                                <div class="row no-print">
                                    <div class="col-12" style="margin-bottom: 10px;">
                                        <a class="btn btn-success float-right" style="margin-right: 5px; cursor: pointer;" href="{{ route('apps-rpp-export-id', $rpp[0]->id ) }}"><i class="fas fa-download"></i></a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>