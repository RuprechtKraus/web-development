PROGRAM HelloDear(INPUT, OUTPUT);
USES
  DOS;
VAR
  NamePos: INT8;
  Query_String, Name, TempString: STRING;
BEGIN
  WRITELN('Content-Type: text/plain');
  WRITELN;
  Query_String := GetEnv('QUERY_STRING');
  NamePos := POS('name=', Query_String);
  IF NamePos <> 0
  THEN
    BEGIN
      TempString := COPY(Query_String, NamePos + 5, LENGTH(Query_String) - NamePos + 5);
      IF POS('&', TempString) <> 0
      THEN
        Name := COPY(TempString, 0, POS('&', TempString) - 1)
      ELSE
        Name := TempString;
      WRITELN('Hello ', Name)
    END
  ELSE
    WRITELN('Hello Anonymous')
END.
