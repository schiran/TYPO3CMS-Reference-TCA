.. include:: /Includes.rst.txt
.. _tca_property_default:

=======
default
=======

.. confval:: default

   :type: integer / string
   :Scope: Display / Proc.
   :Types: :ref:`check <columns-check>` :ref:`group <columns-group>`,
      :ref:`input <columns-input>`,
      :ref:`passthrough <columns-passthrough>`,
      :ref:`radio <columns-radio>`

   Default value set if a new record is created.

Examples
========

Input fields
------------

.. include:: /Includes/Images/Styleguide/RstIncludes/ValuesdefaultInput1.rst.txt

.. include:: /Includes/Snippets/Styleguide/RstIncludes/ValuesdefaultInput1.rst.txt


Date fields
------------

.. include:: /Includes/Images/Styleguide/RstIncludes/ValuesdefaultInput2.rst.txt

.. include:: /Includes/Snippets/Styleguide/RstIncludes/ValuesdefaultInput2.rst.txt

.. note::

   Please note that the TCA files get cached. It is therefore not possible to
   set the current date as default value by setting the default value to a
   the current :php:`time()`.
