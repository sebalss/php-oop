<?php

class SocialMedia{
    public string $name;
}

//final
        class Facebook extends  SocialMedia{

}

// error apabila ditulis "final" sebelum kata class.
class FakeFacebook extends Facebook{

}
