<?php
class profile
{
    public $id = "";
    public $username = "";
    public $useremail = "";
    public $userbio = "";
    public $userage = "";

    public function print_profile()
    {
?>
        <article class="profile">
            <h3>
                <?php echo $this->username; ?>
            </h3>
            <div class="info">
                <div class="profile-info">
                    <label class="profile-info-l" for="">Email: </label>
                    <p class="profile-info-r"><?= $this->useremail ?></p>
                </div>
                <div class="profile-info">
                    <label class="profile-info-l" for="">Bio: </label>
                    <p class="profile-info-r bio"><?= $this->userbio ?></p>
                </div>
                <div class="profile-info">
                    <label class="profile-info-l"></label>
                    <p class="profile-info-r age"><?= $this->userage ?></p>
                </div>
            </div>
        </article>
<?php
    }
}
