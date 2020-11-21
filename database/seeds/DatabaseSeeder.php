<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(PostTableSeeder::class);
        $this->call(StudentTableSeed::class);
        $this->call(TeacherTableSeed::class);
        $this->call(KtpTableSeed::class);
        $this->call(CertificateTableSeed::class);
        $this->call(NuptkTableSeed::class);
        $this->call(ProgramstudyTableSeed::class);
        $this->call(TmtTableSeed::class);
        $this->call(SubjectTableSeed::class);
        $this->call(StatusStudentSeed::class);
        $this->call(StatusAccountSeed::class);
        $this->call(ProgramsTableSeed::class);
        $this->call(UserTableSeed::class);
        $this->call(PermissionTableSeed::class);
        $this->call(CompanyTableSeed::class);
    }
}