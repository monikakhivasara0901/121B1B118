# Validate XML against XSD
xmllint --noout --schema books.xsd books.xml

# Check the exit code of xmllint
if [ $? -eq 0 ]; then
    echo "No errors found in XSD and XML files."
else
    echo "Validation failed. There are errors in XSD or XML files."
fi
