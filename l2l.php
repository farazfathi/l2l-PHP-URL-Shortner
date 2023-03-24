<?php
class l2l
{
    public $token = false;
    function __construct($val)
    {
        $this->token = $val;
    }
    function short($url)
    {
        return $this->get("https://l2l.ink/api/{$this->token}/short?url=" + urlencode($url));
    }
    function edit($id, $data)
    {
        $x = [];
        foreach ($data as $k => $v) $x[] = "{$k}={$v}";
        $x = "?" . join("&", $x);
        return $this->get("https://l2l.ink/api/{$this->token}/edit/{$id}{$x}");
    }
    function delete($id)
    {
        return $this->get("https://l2l.ink/api/{$this->token}/delete/{$id}");
    }
    function analyze($id)
    {
        return $this->get("https://l2l.ink/api/{$this->token}/analyze/{$id}");
    }
    function links()
    {
        return $this->get("https://l2l.ink/api/{$this->token}/auth")['urls'];
    }
    function url($id)
    {
        return $this->get("https://l2l.ink/api/{$this->token}/url/{$id}");
    }
    function get($url)
    {
        return json_decode(file_get_contents($url), true);
    }
}
