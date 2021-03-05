PROGRAM RetrieveParam(INPUT, OUTPUT);
USES
  DOS;

FUNCTION GetQueryStringParameter(Key: STRING): STRING;
VAR
  KeyPos: INT8;
  ParamValue, Query_String, TempString: STRING;
BEGIN
  Query_String := GetEnv('QUERY_STRING');
  KeyPos := POS(Key + '=', Query_String);
  IF KeyPos <> 0
  THEN
    BEGIN
      Query_String := GetEnv('QUERY_STRING');
      TempString := COPY(Query_String, POS(Key + '=', Query_String) + LENGTH(Key) + 1,
        LENGTH(Query_String) - KeyPos + LENGTH(Key) + 1);
      IF POS('&', TempString) <> 0
      THEN
        ParamValue := COPY(TempString, 0, POS('&', TempString) - 1)
      ELSE
        ParamValue := TempString;
      EXIT(ParamValue)
    END
  ELSE
    EXIT('Parameter not found')
END;

BEGIN
  WRITELN('Content-Type: text/plain');
  WRITELN;
  WRITELN('First Name: ', GetQueryStringParameter('first_name'));
  WRITELN('Last Name: ', GetQueryStringParameter('last_name'));
  WRITELN('Age: ', GetQueryStringParameter('age'));
  WRITELN('Gender: ', GetQueryStringParameter('gender'))
END.
