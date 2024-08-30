
Questao::whereBetween('nivel',[1,3])->orderBy('nivel','desc')->get()


Alternativa::where('status',1)->get()


Questao::whereBetween('nivel',[1,3])->orderBy('nivel','desc')->get()


Alternativa::whereHas('questao',fn($q)=>$q->where('modulo_id',1))->count()


Modulo::with(['questoes'=>fn($q)=>$q->whereHas('alternativas'),'alternativas'=>fn($q)=>$q->where('alternativas.status',1)])->get()


