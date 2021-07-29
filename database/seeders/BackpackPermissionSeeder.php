<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BackpackPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * php artisan db:seed --class=BackpackPermissionSeeder
     */
    public function run()
    {
        $role = config('backpack.permissionmanager.models.role');
        $perm = config('backpack.permissionmanager.models.permission');
        $perm::truncate();
        $role::truncate();

        // Truncate all tables related to Permission Feature
        // Schema::disableForeignKeyConstraints();
        // Create Default Roles

        $dev = $role::updateOrCreate(['id' => 1], ['name' => 'Developer'])->id;
        $admin = $role::updateOrCreate(['id' => 2], ['name' => 'Admin'])->id;
        $central = $role::updateOrCreate(['id' => 6], ['name' => 'Zillionholding'])->id;
        $bm = $role::updateOrCreate(['id' => 5], ['name' => 'Zillionholding-BM'])->id;
        $leader = $role::updateOrCreate(['id' => 4], ['name' => 'Zillionholding-Leader'])->id;
        $ls = $role::updateOrCreate(['id' => 3], ['name' => 'Zillionholding-LS'])->id;
        $bank = $role::updateOrCreate(['id' => 7], ['name' => 'VTrust-Bank HQ'])->id;
        $vtrust = $role::updateOrCreate(['id' => 8], ['name' => 'VTrust'])->id;
        $bankBm = $role::updateOrCreate(['id' => 9], ['name' => 'VTrust-Bank Branch'])->id;
        $co = $role::updateOrCreate(['id' => 10], ['name' => 'VTrust-Bank CO'])->id;
        $news = $role::updateOrCreate(['id' => 11], ['name' => 'News and Ads'])->id;

        if (env('DB_CONNECTION') === 'pgsql') {
            \DB::statement("ALTER SEQUENCE roles_id_seq RESTART WITH 1000;");
        }

        $roleDev = [$dev];

        $roleAdmin = array_merge($roleDev, [$admin]);

        $rolesCentral = array_merge($roleAdmin, [$central]);

        $rolesBranch = array_merge($rolesCentral, [$bm]);

        $rolesLeader = array_merge($rolesBranch, [$leader]);

        $rolesLs = array_merge($rolesLeader, [$ls]);

        // VTurst role

        $roleVtrust = array_merge($roleDev, [$vtrust]);

        $roleBank = array_merge($roleVtrust, [$bank]);

        $roleBankBranch = array_merge($roleBank, [$bankBm]);

        $roleCo = array_merge($roleBankBranch, [$co]);


        // Every permission is on each category start after another 20
        // Example: 1 - 20, 21 - 40

        // CONTACT
        $this->generatePermission(['id' => 2, 'name' => 'contact list'], array_merge($rolesLs, $roleCo));
        $this->generatePermission(['id' => 3, 'name' => 'contact create'], array_merge($rolesLs, $roleCo));
        $this->generatePermission(['id' => 4, 'name' => 'contact show'], array_merge($rolesLs, $roleCo));
        $this->generatePermission(['id' => 5, 'name' => 'contact update'], array_merge($rolesLs, $roleCo));
        $this->generatePermission(['id' => 6, 'name' => 'contact delete'], array_merge($rolesLs, $roleCo));
        $this->generatePermission(['id' => 7, 'name' => 'contact force delete'], array_merge($rolesLs, $roleBank));
        $this->generatePermission(['id' => 8, 'name' => 'contact vip list only 100'], [$ls]);
        $this->generatePermission(['id' => 9, 'name' => 'contact convert to user'], array_merge($rolesCentral, $roleBank));
        $this->generatePermission(['id' => 10, 'name' => 'contact vip list'], $rolesLs);
        $this->generatePermission(['id' => 11, 'name' => 'contact listing tab'], $rolesLs);
        $this->generatePermission(['id' => 12, 'name' => 'contact property tab'], $rolesLs);
        $this->generatePermission(['id' => 13, 'name' => 'contact owner property tab'], $rolesLs);
        $this->generatePermission(['id' => 14, 'name' => 'contact appraisals tab'],array_merge($roleDev, $roleCo));
        $this->generatePermission(['id' => 15, 'name' => 'contact task activity tab'], $rolesLs);
        $this->generatePermission(['id' => 16, 'name' => 'add vip contact'], $rolesLs);
        $this->generatePermission(['id' => 17, 'name' => 'contact restore delete'], array_merge($rolesLs, $roleBank));

        // USER
        $this->generatePermission(['id' => 20, 'name' => 'user list'], array_merge($rolesCentral, $roleBank));
        $this->generatePermission(['id' => 21, 'name' => 'user create'], array_merge($rolesCentral, $roleBank));
        $this->generatePermission(['id' => 23, 'name' => 'user update'], array_merge($rolesCentral, $roleBank));
        $this->generatePermission(['id' => 24, 'name' => 'user delete'], array_merge($rolesCentral, $roleBank));

        // ACCOUNT
        $this->generatePermission(['id' => 40, 'name' => 'account list'], array_merge($rolesLs, $roleBank));
        $this->generatePermission(['id' => 41, 'name' => 'account create'], array_merge($rolesLs, $roleBank));
        $this->generatePermission(['id' => 42, 'name' => 'account show'], array_merge($rolesLs, $roleBank));
        $this->generatePermission(['id' => 43, 'name' => 'account update'], array_merge($rolesLs, $roleBank));
        $this->generatePermission(['id' => 44, 'name' => 'account delete'], array_merge($rolesLs, $roleBank));
        $this->generatePermission(['id' => 45, 'name' => 'account force delete'], array_merge($rolesLs, $roleBank));
        $this->generatePermission(['id' => 46, 'name' => 'account reorder'], $rolesCentral);
        $this->generatePermission(['id' => 47, 'name' => 'account restore delete'], array_merge($rolesLs, $roleBank));

        // ROLE
        $this->generatePermission(['id' => 60, 'name' => 'role list'], array_merge($rolesCentral, $roleVtrust));
        $this->generatePermission(['id' => 61, 'name' => 'role create'], array_merge($rolesCentral, $roleVtrust));
        $this->generatePermission(['id' => 63, 'name' => 'role update'], array_merge($rolesCentral, $roleVtrust));
        $this->generatePermission(['id' => 64, 'name' => 'role delete'], $rolesCentral);
        $this->generatePermission(['id' => 65, 'name' => 'role force delete'], $rolesCentral);

        // LISTING
        $this->generatePermission(['id' => 80, 'name' => 'listing list'], $rolesLs);
        $this->generatePermission(['id' => 82, 'name' => 'listing show'], $rolesLs);
        $this->generatePermission(['id' => 83, 'name' => 'listing update'], $rolesLs);
        $this->generatePermission(['id' => 84, 'name' => 'listing delete'], $rolesLs);
        $this->generatePermission(['id' => 85, 'name' => 'listing force delete'], $rolesLs);
        $this->generatePermission(['id' => 88, 'name' => 'listing renew date'], $rolesLs);
        $this->generatePermission(['id' => 89, 'name' => 'listing restore delete'], $rolesLs);

        // PROPERTY
        $this->generatePermission(['id' => 100, 'name' => 'property list'], array_merge($rolesLs, $roleCo));
        $this->generatePermission(['id' => 101, 'name' => 'property create'], array_merge($rolesLs, $roleCo));
        $this->generatePermission(['id' => 102, 'name' => 'property show'], array_merge($rolesLs, $roleCo));
        $this->generatePermission(['id' => 103, 'name' => 'property update'], array_merge($rolesLs, $roleCo));
        $this->generatePermission(['id' => 104, 'name' => 'property delete'], array_merge($rolesLs, $roleCo));
        $this->generatePermission(['id' => 105, 'name' => 'property force delete'], $rolesLs);
        $this->generatePermission(['id' => 106, 'name' => 'property submit'], $rolesLs);
        $this->generatePermission(['id' => 107, 'name' => 'property approve submit'], $rolesLeader);
        $this->generatePermission(['id' => 108, 'name' => 'property save and draft'], $rolesLs);
        $this->generatePermission(['id' => 109, 'name' => 'property request'], $rolesLs);
        $this->generatePermission(['id' => 110, 'name' => 'property approve'], $rolesLeader);
        $this->generatePermission(['id' => 111, 'name' => 'property request listing'], $rolesLs);
        $this->generatePermission(['id' => 112, 'name' => 'property approve listing'], $rolesLeader);
        $this->generatePermission(['id' => 113, 'name' => 'property map price'], array_merge($rolesLs));
        $this->generatePermission(['id' => 114, 'name' => 'property map'], array_merge($rolesLs, $roleCo, [$vtrust]));
        $this->generatePermission(['id' => 115, 'name' => 'property detail'], array_merge($rolesLs, $roleVtrust));
        $this->generatePermission(['id' => 116, 'name' => 'property restore delete'], $rolesLs);
        $this->generatePermission(['id' => 117, 'name' => 'property by vtrust'], [$vtrust]);
        $this->generatePermission(['id' => 118, 'name' => 'property hide agreement information'], [$vtrust]);
        $this->generatePermission(['id' => 119, 'name' => 'property hide owner information on public'], [$vtrust]);
        $this->generatePermission(['id' => 120, 'name' => 'property hide button save'], [$vtrust]);
        $this->generatePermission(['id' => 121, 'name' => 'property hide task activity'], [$vtrust]);
        $this->generatePermission(['id' => 122, 'name' => 'property post listing'], array_merge($rolesLs, $roleBank));
        $this->generatePermission(['id' => 123, 'name' => 'property history'], array_merge($rolesLs, $roleBank));
        $this->generatePermission(['id' => 124, 'name' => 'property data saleforce create'], [$vtrust]);
        $this->generatePermission(['id' => 125, 'name' => 'property data saleforce update'], [$vtrust]);
        $this->generatePermission(['id' => 126, 'name' => 'property data saleforce preview'], [$vtrust]);

        // INQUIRIES
        // $this->generatePermission(['id' => 140, 'name' => 'inquiry list'], $rolesLs);
        // $this->generatePermission(['id' => 141, 'name' => 'inquiry create'], $rolesLs);
        // $this->generatePermission(['id' => 142, 'name' => 'inquiry show'], $rolesLs);
        // $this->generatePermission(['id' => 143, 'name' => 'inquiry update'], $rolesLs);
        // $this->generatePermission(['id' => 144, 'name' => 'inquiry delete'], $rolesLs);

        // SUBMITCASE
        $this->generatePermission(['id' => 160, 'name' => 'submitcase list'], array_merge($rolesLs, $roleCo));
        $this->generatePermission(['id' => 161, 'name' => 'submitcase create'], array_merge($rolesLs, $roleCo));
        $this->generatePermission(['id' => 162, 'name' => 'submitcase show'], array_merge($rolesLs, $roleCo));
        $this->generatePermission(['id' => 163, 'name' => 'submitcase update'], array_merge($rolesLs, $roleCo));
        $this->generatePermission(['id' => 164, 'name' => 'submitcase delete'], array_merge($rolesLs, $roleCo));
        $this->generatePermission(['id' => 165, 'name' => 'submitcase force delete'], array_merge($rolesLs, $roleCo));
        $this->generatePermission(['id' => 166, 'name' => 'submitcase feedback'], array_merge($rolesLs, $roleCo));
        $this->generatePermission(['id' => 167, 'name' => 'submitcase restore delete'], array_merge($rolesLs, $roleCo));
        $this->generatePermission(['id' => 168, 'name' => 'submitcase download report'], array_merge($rolesLs, $roleCo));
        $this->generatePermission(['id' => 169, 'name' => 'submitcase renew'], array_merge($rolesLs, $roleCo));
        $this->generatePermission(['id' => 170, 'name' => 'submitcase history'], array_merge($roleBank));
        $this->generatePermission(['id' => 171, 'name' => 'start indication'], $roleDev);
        // $this->generatePermission(['id' => 172, 'name' => 'submitcase api partner list'], array_merge($roleDev, [$cbcAdmin]));
        $this->generatePermission(['id' => 173, 'name' => 'submitcase filter property code'], $roleDev);
        $this->generatePermission(['id' => 174, 'name' => 'submitcase filter company name'], $roleVtrust);
        $this->generatePermission(['id' => 175, 'name' => 'submitcase filter brand name'], array_merge($roleVtrust, $roleBank, $roleBankBranch, $roleCo));
        $this->generatePermission(['id' => 176, 'name' => 'submitcase renew history'], $roleDev);
        $this->generatePermission(['id' => 177, 'name' => 'submitcase filter instructor name'], $roleCo);


        // // VALUATION
        // $this->generatePermission(['id' => 180, 'name' => 'valuation list'], $rolesCentral);
        // $this->generatePermission(['id' => 181, 'name' => 'valuation create'], $rolesCentral);
        // $this->generatePermission(['id' => 182, 'name' => 'valuation show'], $rolesLs);
        // $this->generatePermission(['id' => 183, 'name' => 'valuation update'], $rolesCentral);
        // $this->generatePermission(['id' => 184, 'name' => 'valuation delete'], $rolesCentral);
        // $this->generatePermission(['id' => 185, 'name' => 'valuation force delete'], $rolesCentral);

        // PERMISSION
        // $this->generatePermission(['id' => 200, 'name' => 'permission list'], $rolesCentral);
        // $this->generatePermission(['id' => 201, 'name' => 'permission create'], $rolesCentral);
        // $this->generatePermission(['id' => 202, 'name' => 'permission show'], $rolesLs);
        // $this->generatePermission(['id' => 203, 'name' => 'permission update'], $rolesCentral);
        // $this->generatePermission(['id' => 204, 'name' => 'permission delete'], $rolesCentral);
        // $this->generatePermission(['id' => 205, 'name' => 'permission force delete'], $rolesCentral);

        // KNOWLEDGE
        // $this->generatePermission(['id' => 220, 'name' => 'knowledge list'], $roleAdmin);
        // $this->generatePermission(['id' => 221, 'name' => 'knowledge create'], $roleAdmin);
        // $this->generatePermission(['id' => 222, 'name' => 'knowledge show'], $roleAdmin);
        // $this->generatePermission(['id' => 223, 'name' => 'knowledge update'], $roleAdmin);
        // $this->generatePermission(['id' => 224, 'name' => 'knowledge delete'], $roleAdmin);
        // $this->generatePermission(['id' => 225, 'name' => 'knowledge force delete'], $rolesCentral);

        // REPORT
        // $this->generatePermission(['id' => 240, 'name' => 'report list'], $roleAdmin);
        // $this->generatePermission(['id' => 241, 'name' => 'report create'], $roleAdmin);
        // $this->generatePermission(['id' => 242, 'name' => 'report show'], $roleAdmin);
        // $this->generatePermission(['id' => 243, 'name' => 'report update'], $roleAdmin);
        // $this->generatePermission(['id' => 244, 'name' => 'report delete'], $roleAdmin);
        // $this->generatePermission(['id' => 245, 'name' => 'report force delete'], $roleAdmin);
        $this->generatePermission(['id' => 246, 'name' => 'reports list'], $roleAdmin);
        $this->generatePermission(['id' => 247, 'name' => 'reports for vtrust'], $roleAdmin);
        $this->generatePermission(['id' => 248, 'name' => 'reports for vtrust by company'], $roleAdmin);
        $this->generatePermission(['id' => 249, 'name' => 'reports for vtrust by region and account'], $roleAdmin);
        $this->generatePermission(['id' => 250, 'name' => 'reports for vtrust by instructor'], $roleAdmin);
        $this->generatePermission(['id' => 251, 'name' => 'reports for vtrust default'], $roleAdmin);
        $this->generatePermission(['id' => 252, 'name' => 'reports for vtrust summary report'], $roleAdmin);
        $this->generatePermission(['id' => 253, 'name' => 'reports for vtrust case summary report'], $roleAdmin);

        // REPAIR
        // $this->generatePermission(['id' => 260, 'name' => 'repair list'], $roleAdmin);
        // $this->generatePermission(['id' => 261, 'name' => 'repair create'], $roleAdmin);
        // $this->generatePermission(['id' => 262, 'name' => 'repair show'], $roleAdmin);
        // $this->generatePermission(['id' => 263, 'name' => 'repair update'], $roleAdmin);
        // $this->generatePermission(['id' => 264, 'name' => 'repair delete'], $roleAdmin);
        // $this->generatePermission(['id' => 265, 'name' => 'repair force delete'], $roleAdmin);

        // PRODUCT
        // $this->generatePermission(['id' => 280, 'name' => 'product list'], $roleAdmin);
        // $this->generatePermission(['id' => 281, 'name' => 'product create'], $roleAdmin);
        // $this->generatePermission(['id' => 282, 'name' => 'product show'], $roleAdmin);
        // $this->generatePermission(['id' => 283, 'name' => 'product update'], $roleAdmin);
        // $this->generatePermission(['id' => 284, 'name' => 'product delete'], $roleAdmin);
        // $this->generatePermission(['id' => 285, 'name' => 'product force delete'], $roleAdmin);

        // MEASURELAND
        // $this->generatePermission(['id' => 300, 'name' => 'measureland list'], $roleAdmin);
        // $this->generatePermission(['id' => 301, 'name' => 'measureland create'], $roleAdmin);
        // $this->generatePermission(['id' => 302, 'name' => 'measureland show'], $roleAdmin);
        // $this->generatePermission(['id' => 303, 'name' => 'measureland update'], $roleAdmin);
        // $this->generatePermission(['id' => 304, 'name' => 'measureland delete'], $roleAdmin);
        // $this->generatePermission(['id' => 305, 'name' => 'measureland force delete'], $rolesCentral);

        // LOAN
        // $this->generatePermission(['id' => 320, 'name' => 'loan list'], $roleAdmin);
        // $this->generatePermission(['id' => 321, 'name' => 'loan create'], $roleAdmin);
        // $this->generatePermission(['id' => 322, 'name' => 'loan show'], $roleAdmin);
        // $this->generatePermission(['id' => 323, 'name' => 'loan update'], $roleAdmin);
        // $this->generatePermission(['id' => 324, 'name' => 'loan delete'], $roleAdmin);
        // $this->generatePermission(['id' => 325, 'name' => 'loan force delete'], $roleAdmin);

        // REVIEW
        // $this->generatePermission(['id' => 340, 'name' => 'review list'], array_merge($roleAdmin, $roleVtrust));
        // $this->generatePermission(['id' => 341, 'name' => 'review show'],  array_merge($roleAdmin, $roleVtrust));
        // $this->generatePermission(['id' => 342, 'name' => 'review update'],  array_merge($roleAdmin, $roleVtrust));
        // $this->generatePermission(['id' => 343, 'name' => 'review delete'],  array_merge($roleAdmin, $roleVtrust));
        // $this->generatePermission(['id' => 344, 'name' => 'review create'],  array_merge($roleAdmin, $roleVtrust));

        // FAVORITE
        // $this->generatePermission(['id' => 360, 'name' => 'favorite list'], $roleAdmin);
        // $this->generatePermission(['id' => 361, 'name' => 'favorite create'], $roleAdmin);
        // $this->generatePermission(['id' => 362, 'name' => 'favorite show'], $roleAdmin);
        // $this->generatePermission(['id' => 363, 'name' => 'favorite update'], $roleAdmin);
        // $this->generatePermission(['id' => 364, 'name' => 'favorite delete'], $roleAdmin);

        // TYPE
        $this->generatePermission(['id' => 380, 'name' => 'type list'], $roleAdmin);
        $this->generatePermission(['id' => 381, 'name' => 'type create'], array_merge($roleAdmin, [$news]));
        $this->generatePermission(['id' => 382, 'name' => 'type update'], $roleAdmin);
        $this->generatePermission(['id' => 383, 'name' => 'type delete'], $roleAdmin);
        $this->generatePermission(['id' => 384, 'name' => 'type reorder'], $roleAdmin);

        // SETTING
        $this->generatePermission(['id' => 400, 'name' => 'setting list'], $roleAdmin);
        $this->generatePermission(['id' => 401, 'name' => 'setting update'], $roleAdmin);

        //SEND NOTIFICATION
        // $this->generatePermission(['id' => 420, 'name' => 'send notification list'], $roleAdmin);
        // $this->generatePermission(['id' => 421, 'name' => 'send notification create'], $roleAdmin);
        // $this->generatePermission(['id' => 422, 'name' => 'send notification update'], $roleAdmin);
        // $this->generatePermission(['id' => 423, 'name' => 'send notification delete'], $roleAdmin);
        // $this->generatePermission(['id' => 424, 'name' => 'send notification send'], $roleAdmin);

        //OPTION
        $this->generatePermission(['id' => 440, 'name' => 'option list'], $roleAdmin);
        $this->generatePermission(['id' => 441, 'name' => 'option create'], $roleAdmin);
        $this->generatePermission(['id' => 442, 'name' => 'option show'], $roleAdmin);
        $this->generatePermission(['id' => 443, 'name' => 'option update'], $roleAdmin);
        $this->generatePermission(['id' => 444, 'name' => 'option delete'], $roleAdmin);

        //HIERARCHY
        // $this->generatePermission(['id' => 460, 'name' => 'hierarchy list'], $rolesLeader);
        // $this->generatePermission(['id' => 461, 'name' => 'hierarchy create'], $rolesLeader);
        // $this->generatePermission(['id' => 463, 'name' => 'hierarchy update'], $rolesLeader);
        // $this->generatePermission(['id' => 464, 'name' => 'hierarchy delete'], $rolesLeader);
        // $this->generatePermission(['id' => 465, 'name' => 'hierarchy reorder'], $rolesLeader);

        //TASK ACTIVITY
        // $this->generatePermission(['id' => 480, 'name' => 'task activity list'],$rolesLs);
        // $this->generatePermission(['id' => 481, 'name' => 'task activity create'],$rolesLs);
        // $this->generatePermission(['id' => 482, 'name' => 'task activity show'],$rolesLs);
        // $this->generatePermission(['id' => 483, 'name' => 'task activity update'],$rolesLs);
        // $this->generatePermission(['id' => 484, 'name' => 'task activity delete'],$rolesLs);

        // SERVICE
        // $this->generatePermission(['id' => 500, 'name' => 'service list'], $roleAdmin);
        // $this->generatePermission(['id' => 501, 'name' => 'service create'], $roleAdmin);
        // $this->generatePermission(['id' => 502, 'name' => 'service show'], $roleAdmin);
        // $this->generatePermission(['id' => 503, 'name' => 'service update'], $roleAdmin);
        // $this->generatePermission(['id' => 504, 'name' => 'service delete'], $roleAdmin);
        // $this->generatePermission(['id' => 505, 'name' => 'service reorder'], $roleAdmin);

        //FIREBASE TOKEN
        // $this->generatePermission(['id' => 520, 'name' => 'firebasetoken list'], $roleAdmin);
        // $this->generatePermission(['id' => 521, 'name' => 'firebasetoken create'], $roleAdmin);
        // $this->generatePermission(['id' => 522, 'name' => 'firebasetoken update'], $roleAdmin);
        // $this->generatePermission(['id' => 523, 'name' => 'firebasetoken delete'], $roleAdmin);

        //LOG
        // $this->generatePermission(['id' => 540, 'name' => 'log manager list'], $roleDev);

        //SURROUNDING
        // $this->generatePermission(['id' => 560, 'name' => 'surrounding list'], $roleAdmin);
        // $this->generatePermission(['id' => 561, 'name' => 'surrounding create'], $roleAdmin);
        // $this->generatePermission(['id' => 562, 'name' => 'surrounding show'], $roleAdmin);
        // $this->generatePermission(['id' => 563, 'name' => 'surrounding update'], $roleAdmin);
        // $this->generatePermission(['id' => 564, 'name' => 'surrounding delete'], $roleAdmin);

        //GROUP
        // $this->generatePermission(['id' => 580, 'name' => 'group list'], $rolesLs);
        // $this->generatePermission(['id' => 581, 'name' => 'group create'], $rolesLs);
        // $this->generatePermission(['id' => 582, 'name' => 'group show'], $rolesLs);
        // $this->generatePermission(['id' => 583, 'name' => 'group update'], $rolesLs);
        // $this->generatePermission(['id' => 584, 'name' => 'group delete'], $rolesLs);

        //CONTRACT
        // $this->generatePermission(['id' => 600, 'name' => 'contract list'], $rolesLs);
        // $this->generatePermission(['id' => 601, 'name' => 'contract create'], $rolesLs);
        // $this->generatePermission(['id' => 602, 'name' => 'contract show'], $rolesLs);
        // $this->generatePermission(['id' => 603, 'name' => 'contract update'], $rolesLs);
        // $this->generatePermission(['id' => 604, 'name' => 'contract delete'], $rolesLs);

        //CRM CASES
        // $this->generatePermission(['id' => 620], $rolesLs, ['name' => 'crm cases list']);
        // $this->generatePermission(['id' => 621], $rolesLs, ['name' => 'crm cases create']);
        // $this->generatePermission(['id' => 622], $rolesLs, ['name' => 'crm cases show']);
        // $this->generatePermission(['id' => 623], $rolesLs, ['name' => 'crm cases update']);
        // $this->generatePermission(['id' => 624], $rolesLs, ['name' => 'crm cases delete']);
        // $this->generatePermission(['id' => 625], $rolesLs, ['name' => 'crm close cases']);
        // $this->generatePermission(['id' => 626], $rolesLs, ['name' => 'crm cases back']);

        //CAMPAIGN
        // $this->generatePermission(['id' => 640, 'name' => 'campaign list'], $rolesLs);
        // $this->generatePermission(['id' => 641, 'name' => 'campaign create'], $rolesLs);
        // $this->generatePermission(['id' => 642, 'name' => 'campaign show'], $rolesLs);
        // $this->generatePermission(['id' => 643, 'name' => 'campaign update'], $rolesLs);
        // $this->generatePermission(['id' => 644, 'name' => 'campaign delete'], $rolesLs);

        //OPPORTUNITY
        // $this->generatePermission(['id' => 660, 'name' => 'opportunity list'], $rolesLs);
        // $this->generatePermission(['id' => 661, 'name' => 'opportunity create'], $rolesLs);
        // $this->generatePermission(['id' => 662, 'name' => 'opportunity show'], $rolesLs);
        // $this->generatePermission(['id' => 663, 'name' => 'opportunity update'], $rolesLs);
        // $this->generatePermission(['id' => 664, 'name' => 'opportunity delete'], $rolesLs);

        //LEAD
        // $this->generatePermission(['id' => 680, 'name' => 'lead list'], $rolesLs);
        // $this->generatePermission(['id' => 681, 'name' => 'lead create'], $rolesLs);
        // $this->generatePermission(['id' => 682, 'name' => 'lead show'], $rolesLs);
        // $this->generatePermission(['id' => 683, 'name' => 'lead update'], $rolesLs);
        // $this->generatePermission(['id' => 684, 'name' => 'lead delete'], $rolesLs);
        // $this->generatePermission(['id' => 685, 'name' => 'lead history'], array_merge([$dev,$roleVtrust]));

        //LANGUAGE
        // $this->generatePermission(['id' => 700, 'name' => 'language list'], $roleAdmin);
        // $this->generatePermission(['id' => 701, 'name' => 'language create'], $roleAdmin);
        // $this->generatePermission(['id' => 702, 'name' => 'language update'], $roleAdmin);
        // $this->generatePermission(['id' => 703, 'name' => 'language delete'], $roleAdmin);
        // $this->generatePermission(['id' => 704, 'name' => 'language locale'], $roleAdmin);

        //COUNTRY CODE
        // $this->generatePermission(['id' => 720, 'name' => 'country code list'], $roleAdmin);
        // $this->generatePermission(['id' => 721, 'name' => 'country code create'], $roleAdmin);
        // $this->generatePermission(['id' => 722, 'name' => 'country code update'], $roleAdmin);
        // $this->generatePermission(['id' => 723, 'name' => 'country code delete'], $roleAdmin);

        //BANK
        $this->generatePermission(['id' => 740, 'name' => 'access menu bank'], array_merge([$bank,$vtrust,$bankBm,$co]));

        //DISABLE USER SEND SMS OTP
        // $this->generatePermission(['id' => 760], array_merge([$bank,$bankBm,$co]), ['name' => 'enable user send sms otp']);

        //News and Ads
        // $this->generatePermission(['id' => 780, 'name' => 'news and ads list'], array_merge([$dev,$news]));
        // $this->generatePermission(['id' => 781, 'name' => 'news and ads create'], array_merge([$dev,$news]));
        // $this->generatePermission(['id' => 782, 'name' => 'news and ads show'], array_merge([$dev,$news]));
        // $this->generatePermission(['id' => 783, 'name' => 'news and ads update'], array_merge([$dev,$news]));
        // $this->generatePermission(['id' => 784, 'name' => 'news and ads delete'], array_merge([$dev,$news]));
        // $this->generatePermission(['id' => 785, 'name' => 'news and ads force delete'], array_merge([$dev,$news]));
        // $this->generatePermission(['id' => 786, 'name' => 'news and ads delete restore'], array_merge([$dev,$news]));
        
        //VTRUST LANGUAGE
        // $this->generatePermission(['id' => 800, 'name' => 'vtrust language list'], array_merge($roleAdmin, $roleVtrust));
        // $this->generatePermission(['id' => 801, 'name' => 'vtrust language create'], array_merge($roleAdmin, $roleVtrust));
        // $this->generatePermission(['id' => 802, 'name' => 'vtrust language update'], array_merge($roleAdmin, $roleVtrust));
        // $this->generatePermission(['id' => 803, 'name' => 'vtrust language delete'], array_merge($roleAdmin, $roleVtrust));

        // $this->generatePermission(['id' => 820, 'name' => 'guideline list'], array_merge($roleAdmin, $roleVtrust));
        // $this->generatePermission(['id' => 821, 'name' => 'guideline create'], array_merge($roleAdmin, $roleVtrust));
        // $this->generatePermission(['id' => 822, 'name' => 'guideline update'], array_merge($roleAdmin, $roleVtrust));
        // $this->generatePermission(['id' => 823, 'name' => 'guideline delete'], array_merge($roleAdmin, $roleVtrust));
        // $this->generatePermission(['id' => 824, 'name' => 'guideline show'], array_merge($roleAdmin, $roleVtrust));

        $this->generatePermission(['id' => 840, 'name' => 'acleda dashboard show'], array_merge($roleAdmin, $roleVtrust));
        $this->generatePermission(['id' => 841, 'name' => 'dashboard indication v1']);
        $this->generatePermission(['id' => 842, 'name' => 'dashboard indication v2'], array_merge($roleAdmin, $roleVtrust));
        $this->generatePermission(['id' => 843, 'name' => 'dashboard indication v3']);

        // $this->generatePermission(['id' => 860, 'name' => 'help list'], array_merge($roleAdmin, $roleVtrust));
        // $this->generatePermission(['id' => 861, 'name' => 'help create'], array_merge($roleAdmin, $roleVtrust));
        // $this->generatePermission(['id' => 862, 'name' => 'help update'], array_merge($roleAdmin, $roleVtrust));
        // $this->generatePermission(['id' => 863, 'name' => 'help delete'], array_merge($roleAdmin, $roleVtrust));
        // $this->generatePermission(['id' => 864, 'name' => 'help show'], array_merge($roleAdmin, $roleVtrust));

        // $this->generatePermission(['id' => 880, 'name' => 'can transfer contact data'], $roleAdmin);
        // RELEASES
        // $this->generatePermission(['id' => 900, 'name' => 'Releases list'], array_merge($roleAdmin, $roleVtrust));
        // $this->generatePermission(['id' => 901, 'name' => 'Releases create'], array_merge($roleAdmin, $roleVtrust));
        // $this->generatePermission(['id' => 902, 'name' => 'Releases edit'], array_merge($roleAdmin, $roleVtrust));
        // $this->generatePermission(['id' => 903, 'name' => 'Releases show'], array_merge($roleAdmin, $roleVtrust));
        // $this->generatePermission(['id' => 904, 'name' => 'Releases delete'], array_merge($roleAdmin, $roleVtrust));

        // USER INTERNAL INFORMATION
        // $this->generatePermission(['id' => 920, 'name' => 'user internal info list'], array_merge($roleAdmin, $roleVtrust));
        // $this->generatePermission(['id' => 921, 'name' => 'user internal info show'], array_merge($roleAdmin, $roleVtrust));
        // $this->generatePermission(['id' => 922, 'name' => 'user internal info delete'], array_merge($roleAdmin, $roleVtrust));

        // NOTIFICATION TRANSLATION
        // $this->generatePermission(['id' => 940, 'name' => 'notification translate lang list'], $roleAdmin);
        // $this->generatePermission(['id' => 941, 'name' => 'notification translate lang create'], $roleAdmin);
        // $this->generatePermission(['id' => 942, 'name' => 'notification translate lang update'], $roleAdmin);
        // $this->generatePermission(['id' => 943, 'name' => 'notification translate lang delete'], $roleAdmin);

        // PORTAL
        // $this->generatePermission(['id' => 960, 'name' => 'portal list'], array_merge($roleAdmin, $roleVtrust));
        // $this->generatePermission(['id' => 961, 'name' => 'portal create'], array_merge($roleAdmin, $roleVtrust));
        // $this->generatePermission(['id' => 962, 'name' => 'portal update'], array_merge($roleAdmin, $roleVtrust));
        // $this->generatePermission(['id' => 963, 'name' => 'portal delete'], array_merge($roleAdmin, $roleVtrust));
        // $this->generatePermission(['id' => 964, 'name' => 'portal show'], array_merge($roleAdmin, $roleVtrust));

        //Default Construction Cost
        // $this->generatePermission(['id' => 985, 'name' => 'default construction cost list'], $roleDev);
        // $this->generatePermission(['id' => 986, 'name' => 'default construction cost create'], $roleDev);
        // $this->generatePermission(['id' => 987, 'name' => 'default construction cost update'], $roleDev);
        // $this->generatePermission(['id' => 988, 'name' => 'default construction cost delete'], $roleDev);
        // $this->generatePermission(['id' => 989, 'name' => 'default construction cost show'], $roleDev);

        //Config Auto Adjustment
        // $this->generatePermission(['id' => 1020, 'name' => 'auto adjust config list'], $roleDev);
        // $this->generatePermission(['id' => 1021, 'name' => 'auto adjust config create'], $roleDev);
        // $this->generatePermission(['id' => 1022, 'name' => 'auto adjust config update'], $roleDev);
        // $this->generatePermission(['id' => 1023, 'name' => 'auto adjust config delete'], $roleDev);
        // $this->generatePermission(['id' => 1024, 'name' => 'auto adjust config show'], $roleDev);
        // General Feedback
        // $this->generatePermission(['id' => 980, 'name' => 'general feedback list'], array_merge($roleAdmin, $roleVtrust));
        // $this->generatePermission(['id' => 981, 'name' => 'general feedback create'], array_merge($roleAdmin, $roleVtrust));
        // $this->generatePermission(['id' => 982, 'name' => 'general feedback update'], array_merge($roleAdmin, $roleVtrust));
        // $this->generatePermission(['id' => 983, 'name' => 'general feedback delete'], array_merge($roleAdmin, $roleVtrust));
        // $this->generatePermission(['id' => 984, 'name' => 'general feedback show'], array_merge($roleAdmin, $roleVtrust));
        // ORDERS
        $this->generatePermission(['id' => 1000, 'name' => 'order list'], array_merge($roleAdmin));
        $this->generatePermission(['id' => 1001, 'name' => 'order delete'], array_merge($roleAdmin));
        $this->generatePermission(['id' => 1002, 'name' => 'order show'], array_merge($roleAdmin));

        // SYNC CONFIGURATION
        // $this->generatePermission(['id' => 1040, 'name' => 'sync config'], array_merge($roleDev));
    }

    protected function generatePermission($data, $roles = [], $updateData = [])
    {
        $perm = config('backpack.permissionmanager.models.permission');

        if (is_array($roles) && count($roles)) {
            if (is_array($updateData) && count($updateData)) {
                $perm::updateOrCreate($data, $updateData)->roles()->sync($roles);
            } else {
                $perm::firstOrCreate($data)->roles()->sync($roles);
            }
        } else {
            if (is_array($updateData) && count($updateData)) {
                $perm::updateOrCreate($data, $updateData);
            } else {
                $perm::firstOrCreate($data);
            }
        }
    }

    public function truncateTable($tables)
    {
        if (is_array($tables) && count($tables)) {
            foreach($tables as $table):
                DB::table($table)->truncate();
            endforeach;
        }
    }
}
