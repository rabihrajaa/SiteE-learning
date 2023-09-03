<?php

public function upload($request,$nf)
    {
    	
        $uniqueFileName = uniqid() . $request->get($nf)->getClientOriginalName() . '.' . $request->get($nf)->getClientOriginalExtension();

        $request->get($nf)->move(public_path('files') . $uniqueFileName);

        return public_path('files') . $uniqueFileName;
    }



?>